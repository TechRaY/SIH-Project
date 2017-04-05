package com.example.anjali.se_project;
/**
 * Created by Anjali on 4/3/2017.
 */

public class Center {
    public String CenterID;
    public String CenterName;
    public String CourseName;
    public String Rating;
    public String TradeCode;

    public Center(String cid, String centername, String cname, String rating, String tradeCode){
        CenterID = cid;
        CenterName = centername;
        CourseName = cname;
        Rating = rating;
        TradeCode = tradeCode;
    }

    public String getCenterID(){
        return CenterID;
    }
    public String getCenterName(){
        return CenterName;
    }
    public String getCourseName(){
        return CourseName;
    }
    public String getRating(){
        return Rating;
    }
    public String getTradeCode(){
        return TradeCode;
    }
}

