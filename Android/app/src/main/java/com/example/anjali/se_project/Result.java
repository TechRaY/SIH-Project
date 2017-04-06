package com.example.anjali.se_project;

import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.nio.charset.Charset;
import java.util.ArrayList;

public class Result extends AppCompatActivity {
    public String JSON_URL = "http://192.168.0.3/SIH/JSON_getData.php";
    public String enteredCourseName;
    public ListView listView;
    public String jsonResponse;
    //public String ITICode, ITIName, TradeName, Rating, TradeCode;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_result);
        enteredCourseName = getIntent().getStringExtra("courseName");
        Log.d("Result class:", "Result activity created");
        new BackgroundTask().execute();
    }


    private void updateUI(final ArrayList<Center> centerList) {
        CenterAdapter adapter = new CenterAdapter(this, centerList);
        listView = (ListView) findViewById(R.id.list);
        listView.setAdapter(adapter);
        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
                Intent newIntent = new Intent(Result.this, CenterDetails.class);
                newIntent.putExtra("ITICode", centerList.get(i).CenterID);
                newIntent.putExtra("TradeCode", centerList.get(i).TradeCode);
                newIntent.putExtra("jsonString", jsonResponse);
                startActivity(newIntent);
            }

        });

    }


    private class BackgroundTask extends AsyncTask<URL, Void, ArrayList<Center>> {

        @Override
        protected ArrayList<Center> doInBackground(URL... urls) {
            URL url = createUrl(JSON_URL);
            Log.d("", url.toString());
            jsonResponse = "";

            try {
                jsonResponse = makeHttpRequest(url);
                Log.d("", "doInBackground: " + jsonResponse);
            } catch (IOException e) {
                e.printStackTrace();
            }

            Log.d("", jsonResponse);
            ArrayList<Center> centerList = extractFeatureFromJson(jsonResponse);
            Log.d("Bakcground Class", "do in background working......"+centerList);
            return centerList;
        }

        @Override
        protected void onPostExecute(ArrayList<Center> centerList) {

            if (centerList == null) {
                return;
            }
            updateUI(centerList);

        }

        private URL createUrl(String stringUrl) {
            URL url;
            try {
                url = new URL(stringUrl);
            } catch (MalformedURLException exception) {
                Log.e("Result class: ", "Error with creating URL", exception);
                return null;
            }
            return url;
        }

        private String makeHttpRequest(URL url) throws IOException {
            String jsonResponse = "";
            HttpURLConnection httpURLConnection = null;
            InputStream inputStream = null;
            try {
                httpURLConnection = (HttpURLConnection) url.openConnection();
                inputStream = httpURLConnection.getInputStream();
                jsonResponse = readFromStream(inputStream);
//
//
            } catch (IOException e) {
                e.printStackTrace();
            } finally {
                if (httpURLConnection != null)
                    httpURLConnection.disconnect();
                if (inputStream != null)
                    inputStream.close();
            }

            return jsonResponse;
        }

        private String readFromStream(InputStream inputStream) throws IOException {
            StringBuilder stringBuilder = new StringBuilder();
            if (inputStream != null) {
                InputStreamReader inputStreamReader = new InputStreamReader(inputStream, Charset.forName("UTF-8"));
                BufferedReader bufferedReader = new BufferedReader(inputStreamReader);
                String line = bufferedReader.readLine();
                while (line != null) {
                    stringBuilder.append(line);
                    line = bufferedReader.readLine();
                }
            }
            return stringBuilder.toString();
        }

        private ArrayList<Center> extractFeatureFromJson(String centerDetailJson) {
            try {

                ArrayList<Center> centerList = new ArrayList<>();
                JSONObject basejsonresponse = new JSONObject(centerDetailJson);
                JSONArray responsearray = basejsonresponse.getJSONArray("server_response");
                int size = responsearray.length();
                int i = 0;
                while (size-- > 0) {
                    JSONObject row = responsearray.getJSONObject(i++);
                    String ITICode = row.getString("ITI_Code");
                    String ITIName = row.getString("ITI_Name");
                    String TradeName = row.getString("Trade_Name");
                    String Rating = row.getString("Institute_Rating");

                    String TradeCode = row.getString("Trade_Code");

                    if (enteredCourseName.equalsIgnoreCase(TradeName))
                        centerList.add(new Center(ITICode, ITIName, TradeName, Rating, TradeCode));
                    else
                        continue;
                }
                return centerList;
            } catch (JSONException e) {
                Log.e("Result Class", "problem in json parsing", e);
            }
            return null;
        }


    }
}



