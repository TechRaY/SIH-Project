package com.example.anjali.se_project;

import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.Spinner;

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

public class MainActivity extends AppCompatActivity {
    public String courseName;
    public String JSON_URL = "http://192.168.0.4/SIH/JSON_getData.php";
    public String jsonResponse;
    public Spinner State_Spinner, District_Spinner;
    public String state;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        new BackgroundTask().execute();
    }
    private void updateUI( ArrayList<String> StateList) {
        State_Spinner = (Spinner)findViewById(R.id.state_list);
        ArrayAdapter<String> adapter = new ArrayAdapter<>(this, android.R.layout.simple_spinner_item, StateList);
        State_Spinner.setAdapter(adapter);
    }

    private class BackgroundTask extends AsyncTask<Void, Void, ArrayList<String>> {

        @Override
        protected ArrayList<String> doInBackground(Void...voids) {
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
            ArrayList<String> StateSpinnerData = extractFeatureFromJson(jsonResponse, 1);
            //Log.d("Bakcground Class", "do in background working......"+centerList);
            return StateSpinnerData;
        }

        @Override
        protected void onPostExecute(ArrayList<String> StateList) {

            if (StateList == null) {
                return;
            }
            updateUI(StateList);

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

        private ArrayList<String> extractFeatureFromJson(String centerDetailJson, int n) {
            try {
                switch (n){
                    case 1: {
                        ArrayList<String> stateNameList = new ArrayList<>();
                        JSONObject basejsonresponse = new JSONObject(centerDetailJson);
                        JSONArray responsearray = basejsonresponse.getJSONArray("server_response");
                        int size = responsearray.length();
                        int i = 0;
                        while (size-- > 0) {
                            JSONObject row = responsearray.getJSONObject(i++);
                            if (!stateNameList.contains(row.getString("State")))
                                stateNameList.add(row.getString("State"));
                        }
                        return stateNameList;
                    }
                    case 2: {
                        ArrayList<String> districtNameList = new ArrayList<>();
                        JSONObject basejsonresponse = new JSONObject(centerDetailJson);
                        JSONArray responsearray = basejsonresponse.getJSONArray("server_response");
                        int size = responsearray.length();
                        int i = 0;
                        while (size-- > 0) {
                            JSONObject row = responsearray.getJSONObject(i++);
                            if (!districtNameList.contains(row.getString("District")) && state.equals(row.getString("State")))
                                districtNameList.add(row.getString("District"));
                        }
                        return districtNameList;
                    }
                }

            } catch (JSONException e) {
                Log.e("Result Class", "problem in json parsing", e);
            }
            return null;
        }


    }
    public void Search(View view) {
        EditText course = (EditText) findViewById(R.id.searchCourse);
        courseName = course.getText().toString();
        String state = State_Spinner.getSelectedItem().toString();
        Intent intent = new Intent(MainActivity.this, Result.class);
        intent.putExtra("courseName",courseName);
        intent.putExtra("State",state);
        intent.putExtra("jsonString", jsonResponse);
        startActivity(intent);
    }
}
