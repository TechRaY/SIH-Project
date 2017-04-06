package com.example.anjali.se_project;

import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.widget.TextView;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.net.URL;
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
        TextView iticode = (TextView) findViewById(R.id.iti_code);
        iticode.setText(centerDetails.get(0));
        TextView itiname = (TextView) findViewById(R.id.iti_name);
        itiname.setText(centerDetails.get(1));
        TextView tradecode = (TextView) findViewById(R.id.trade_code);
        tradecode.setText(centerDetails.get(2));
        TextView tradename = (TextView) findViewById(R.id.trade_name);
        tradename.setText(centerDetails.get(3));
        TextView location= (TextView)findViewById(R.id.location);
        location.setText(centerDetails.get(4));
        TextView instituetype = (TextView)findViewById(R.id.institute_type);
        instituetype.setText(centerDetails.get(5));
        TextView establishment= (TextView)findViewById(R.id.date_of_establishment);
        establishment.setText(centerDetails.get(6));
        TextView weburl= (TextView)findViewById(R.id.web_url);
        weburl.setText(centerDetails.get(7));
        TextView updatedate= (TextView)findViewById(R.id.last_update_date);
        updatedate.setText(centerDetails.get(8));
        TextView address = (TextView)findViewById(R.id.address);
        address.setText(centerDetails.get(9));
        TextView state = (TextView)findViewById(R.id.state);
        state.setText(centerDetails.get(10));
        TextView district = (TextView)findViewById(R.id.district);
        district.setText(centerDetails.get(11));
        TextView phone = (TextView)findViewById(R.id.phone);
        phone.setText(centerDetails.get(12));
        TextView pin = (TextView)findViewById(R.id.pin_code);
        pin.setText(centerDetails.get(13));
        TextView email = (TextView)findViewById(R.id.email);
        email.setText(centerDetails.get(14));
        TextView status = (TextView)findViewById(R.id.status);
        status.setText(centerDetails.get(15));
        TextView rating = (TextView) findViewById(R.id.rating);
        rating.setText(centerDetails.get(16));
    }

    private class BackgroundTask extends AsyncTask<URL, Void, ArrayList<String>> {

        @Override
        protected ArrayList<String> doInBackground(URL... urls) {

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
                    String ITIName = row.getString("ITI_Name");
                    String TradeName = row.getString("Trade_Name");
                    String TradeCode = row.getString("Trade_Code");
                    String Location = row.getString("Location");
                    String Institute_Type = row.getString("Institute_Type");
                    String Date_of_Establishment = row.getString("Date_of_Establishment");
                    String Web_URL = row.getString("Web_URL");
                    String Last_Date_Update_Date = row.getString("Last_Date_Update_Date");
                    String Address= row.getString("Address");
                    String State = row.getString("State");
                    String District = row.getString("District");
                    String Contact_Ph_No = row.getString("Contact_Ph_No");
                    String Pin_Code = row.getString("Pin_Code");
                    String Contact_Email = row.getString("Contact_Email");
                    String Affiliation_Status = row.getString("Affiliation_Status");
                    String Rating = row.getString("Institute_Rating");

                    if (Trade_Code.equals(TradeCode) && ITI_Code.equals(ITICode)) {
                        centerDetails.add(ITICode);
                        centerDetails.add(ITIName);
                        centerDetails.add(TradeCode);
                        centerDetails.add(TradeName);
                        centerDetails.add(Location);
                        centerDetails.add(Institute_Type);
                        centerDetails.add(Date_of_Establishment);
                        centerDetails.add(Web_URL);
                        centerDetails.add(Last_Date_Update_Date);
                        centerDetails.add(Address);
                        centerDetails.add(State);
                        centerDetails.add(District);
                        centerDetails.add(Contact_Ph_No);
                        centerDetails.add(Pin_Code);
                        centerDetails.add(Contact_Email);
                        centerDetails.add(Affiliation_Status);
                        centerDetails.add(Rating);
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
