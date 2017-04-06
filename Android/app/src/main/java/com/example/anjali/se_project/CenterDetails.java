package com.example.anjali.se_project;

import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.widget.TextView;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

public class CenterDetails extends AppCompatActivity {
    String ITI_Code, Trade_Code, JSONResponse;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_center_details);
        ITI_Code = getIntent().getStringExtra("ITICode");
        Trade_Code = getIntent().getStringExtra("TradeCode");
        JSONResponse = getIntent().getStringExtra("jsonString");
        new BackgroundTask().execute();
    }

    private void updateUI(ArrayList<String> centerDetails) {

        int textViewID[] = new int[]{R.id.iti_code,R.id.iti_name,R.id.trade_code,R.id.trade_name,R.id.location,R.id.institute_type,
                                    R.id.date_of_establishment,R.id.web_url,R.id.last_update_date,R.id.address,R.id.state,R.id.district,R.id.phone,
                                    R.id.pin_code,R.id.email,R.id.status,R.id.rating};

        String[] textViewName = new String[]{"ITI Code", "ITI Name", "Trade Code", "Trade Name", "Location", "Institute Type",
                                            "Date of Establishment", "Weburl", "Update Date", "Address", "State", "District", "Phone No",
                                            "Pin Code", "Email Id", "Status", "Institute Rating"};

        for(int i = 0; i < textViewID.length; i++){
            ((TextView)findViewById(textViewID[i])).setText(textViewName[i] + ": " + centerDetails.get(i));
        }

    }

    private class BackgroundTask extends AsyncTask<Void, Void, ArrayList<String>> {

        @Override
        protected ArrayList<String> doInBackground(Void...voids) {

            try {
                ArrayList<String> centerDetails = extractFeatureFromJson(JSONResponse);
                return centerDetails;
            } catch (Exception e) {
                e.printStackTrace();
            }
            return null;

        }

        @Override
        protected void onPostExecute(ArrayList<String> centerDetails) {

            if (centerDetails == null) {
                return;
            }
            updateUI(centerDetails);

        }


        private ArrayList<String> extractFeatureFromJson(String JSONString) {
            try {

                ArrayList<String> centerDetails = new ArrayList<>();
                JSONObject basejsonresponse = new JSONObject(JSONString);
                JSONArray responsearray = basejsonresponse.getJSONArray("server_response");
                int size = responsearray.length();
                int i = 0;
                while (size-- > 0) {
                    JSONObject row = responsearray.getJSONObject(i++);

                    String ITICode = row.getString("ITI_Code");
                    String TradeCode = row.getString("Trade_Code");
                    String[] JSONStringName = new String[]{"ITI_Code", "ITI_Name", "Trade_Code", "Trade_Name", "Location", "Institute_Type",
                                                        "Date_of_Establishment", "Web_URL", "Last_Date_Update_Date", "Address", "State", "District",                                                        "Contact_Ph_No", "Pin_Code", "Contact_Email", "Affiliation_Status", "Institute_Rating"};

                    if (Trade_Code.equals(TradeCode) && ITI_Code.equals(ITICode)) {
                        for(int k = 0; k < JSONStringName.length; k++){
                            centerDetails.add(row.getString(JSONStringName[k]));
                        }
                    } else
                        continue;
                }
                return centerDetails;
            } catch (JSONException e) {
                Log.e("Result Class", "problem in json parsing", e);
            }
            return null;
        }

    }
}
