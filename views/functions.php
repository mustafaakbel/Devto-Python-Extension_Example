<?php 

    function index(){
        return view('index');
    }

    function runPythonScript(){
        $output = runScript("devtopython.py","",false);
        return respond($output,200);
    }

?>