package com.example.anjali.se_project;

import android.app.Activity;
import android.support.annotation.NonNull;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import java.util.ArrayList;

import static com.example.anjali.se_project.R.id.center_name;

/**
 * Created by Anjali on 4/4/2017.
 */

public class CenterAdapter extends ArrayAdapter<Center>{

    public CenterAdapter (Activity context, ArrayList<Center> centers) {
        super(context,0,centers);
    }
    @NonNull
    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        View listItemView = convertView;
        if(listItemView == null) {
            listItemView = LayoutInflater.from(getContext()).inflate(R.layout.list_item, parent, false);
        }
        Center currentCenter = getItem(position);

        TextView cid = (TextView) listItemView.findViewById(R.id.center_id);
        cid.setText("ITI Code: "+ currentCenter.getCenterID());
        TextView centerName = (TextView) listItemView.findViewById(center_name);
        centerName.setText("ITI Name: "+ currentCenter.getCenterName());
        TextView cname = (TextView)listItemView.findViewById(R.id.course_name);
        cname.setText("Trade Name: "+ currentCenter.getCourseName());
        TextView rating = (TextView)listItemView.findViewById(R.id.rating);
        rating.setText("Rating: " + currentCenter.getRating() +"/5");

        return listItemView;
    }

}
