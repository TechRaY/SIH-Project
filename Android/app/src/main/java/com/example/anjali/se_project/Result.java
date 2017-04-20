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

import java.util.ArrayList;

public class Result extends AppCompatActivity {

    public String enteredCourseName;
    public ListView listView;
    public String JsonResponse;
    public String state;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_result);
        enteredCourseName = getIntent().getStringExtra("courseName");
        JsonResponse = getIntent().getStringExtra("jsonString");
        state = getIntent().getStringExtra("State");
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
                newIntent.putExtra("jsonString",JsonResponse);
                startActivity(newIntent);
            }

        });

    }


    private class BackgroundTask extends AsyncTask<Void, Void, ArrayList<Center>> {

        @Override
        protected ArrayList<Center> doInBackground(Void...voids) {
            try {
                ArrayList<Center> centerList = extractFeatureFromJson(JsonResponse);
                Log.d("", "doInBackground: " + JsonResponse);
                return  centerList;
            }
            catch (Exception e) {
                e.printStackTrace();
            }
            return null;
        }

        @Override
        protected void onPostExecute(ArrayList<Center> centerList) {

            if (centerList == null) {
                Log.i("Null","Center List Empty");
                return;
            }
            updateUI(centerList);

        }

        private ArrayList<Center> extractFeatureFromJson(String centerDetailJson) {
            try {
                Log.i("Try","In try block of extractfeature");
                ArrayList<Center> centerList = new ArrayList<>();
                JSONObject basejsonresponse = new JSONObject(centerDetailJson);
                JSONArray responsearray = basejsonresponse.getJSONArray("server_response");
                int size = responsearray.length();
                Log.i("Len of response array", "" + size);

                int i = 0;
                while (size-- > 0) {
                    JSONObject row = responsearray.getJSONObject(i++);
                    String ITICode = row.getString("ITI_Code");
                    String ITIName = row.getString("ITI_Name");
                    String TradeName = row.getString("Trade_Name");
                    String Rating = row.getString("Institute_Rating");
                    String TradeCode = row.getString("Trade_Code");
                    String State = row.getString("State");
                    if(enteredCourseName.equals("") && state.equals(State))
                        centerList.add(new Center(ITICode, ITIName, TradeCode, Rating, TradeCode));

                    if (enteredCourseName.equalsIgnoreCase(TradeName) && state.equals(State))
                        centerList.add(new Center(ITICode, ITIName, TradeName, Rating, TradeCode));
//                    Log.i("CenterList", centerList.get(i).CenterID);

                }
                return centerList;
            } catch (JSONException e) {
                Log.e("Result Class", "problem in json parsing", e);
            }
            return null;
        }


    }
}



