@extends('layouts.app')
@extends('layouts.menubar')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Level 3</title>
  </head>
  <body>
    <center><img src="https://raw.githubusercontent.com/Naphorn/MA/master/resources/views/images/level3-1.png" class="rounded mx-auto d-block" width="200"  height="400"></center>

    

    <table width="1000" border="2" align="center">
        <tr>
            <td>ห้อง</td>
            <td>อุณหภูมิคอยล์เย็น</td>
            <td>ความชื้นสัมพัทธ์</td>
            <td>อุณหภูมิห้อง</td>
            <td>แรงดันคอยล์เย็น</td>
            <td>กระแสคอยล์เย็น</td>
            <td>กระแสคอยล์ร้อน</td>
            <td>ความเร็วลม</td>
            <td>ประสิทธิภาพ</td>
            <td>สถานะ</td>
        </tr>
    <tr>
        <td>
            <?php
            @foreach($Status as $row)
            {
              
                echo "<td> {{$row->IP}}</td>";
                echo "<td> {{$row->TempCool}}</td>";
                echo "<td> {{$row->Humidity}}</td>";
                echo "<td> {{$row->TempRoom}}</td>";
                echo "<td> {{$row->VoltCool}}</td>";
                echo "<td> {{$row->CurrentCool}}</td>";
                echo "<td> {{$row->CurrentHot}}</td>";
                echo "<td> {{$row->WindSpeed}}</td>";
                echo "<td> {{$row->Performance}}</td>";
                echo "<td> {{$row->PowerStatus}}</td>";
            }
            @endforeach
            ?>
            &nbsp;
        </td>
    </tr>
    </table>
    <!-- ----------------------------------------------------------------------------------------------------------------------------------- -->

  </body>
</html>
@endsection
