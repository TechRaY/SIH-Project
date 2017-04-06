package com.example.anjali.se_project;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    public String courseName;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void Search(View view) {
        EditText course = (EditText) findViewById(R.id.searchCourse);
        courseName = course.getText().toString();
        Intent intent = new Intent(MainActivity.this, Result.class);
        intent.putExtra("courseName",courseName);
        startActivity(intent);
    }
}
