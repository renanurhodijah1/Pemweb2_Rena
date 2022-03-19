<?php

    function kelulusan($nilai){
        if ($nilai >= 55) {
            $ket = 'LULUS';
        } else { $ket = 'TIDAK LULUS'; }
        return $ket;
    }

    function grade($nilai){
        switch($nilai){
            case $nilai <= 35:
                $grade = 'E';
                break;

            case $nilai >= 36 && $nilai <= 55:
                $grade = 'D';
                break;
            
            case $nilai >= 56 && $nilai <= 69:
                $grade = 'C';
                break;

            case $nilai >= 70 && $nilai <= 84:
                $grade = 'B';
                break;

            case $nilai >= 85 && $nilai <= 100:
                $grade = 'A';
                break;
            
            default: 
                $grade = 'I';
            }

        return $grade;
    }

    function predikat($grade){
        switch($grade){
            case 'E':
                $desc = 'Sangat Kurang';
                break;

            case 'D':
                $desc = 'Kurang';
                break;
            
            case 'C':
                $desc = 'Cukup';
                break;

            case 'B':
                $desc = 'Baik';
                break;

            case 'A':
                $desc = 'Sangat Baik';
                break;
            
            default:
                $desc = 'Tidak Ada';
                break;
            }
                
        return $grade;
    }
