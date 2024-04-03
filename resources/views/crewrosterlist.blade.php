<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
        <title> Crew Roster List</title>

        <style type="text/css">
            table { border: 1px solid #000; border-collapse: collapse; padding: 5px;  }
            table td {border: 1px solid #000; padding:5px; }
        </style>
    </head>
    <body>
        <a href="/import-crew-roster" class="btn btn-success">Import Roster</a>      
        <div class="" style="margin: 20px; padding:10px;">      
                <div class="col-xs-6">
                    <div class="btn-group visible-md visible-lg pull-right">
                        <input type="submit" name="ctl00$Main$week" value="Week" id="ctl00_Main_week" class="btn btn-default btn-sm active">
                        <input type="submit" name="ctl00$Main$period" value="Period" id="ctl00_Main_period" class="btn btn-default btn-sm">
                        <input type="submit" name="ctl00$Main$customPeriod" value="Custom Period" id="ctl00_Main_customPeriod" class="btn btn-default btn-sm">
                        <input type="submit" name="ctl00$Main$historicPeriod" value="Historic Period" id="ctl00_Main_historicPeriod" class="btn btn-default btn-sm">
                    </div>
                    <div class="dropdown" style="width:100px">
                        <select name="ctl00$Main$activitySelectDropdown" onchange="javascript:setTimeout('__doPostBack(\'ctl00$Main$activitySelectDropdown\',\'\')', 0)" id="ctl00_Main_activitySelectDropdown" class="dropdown dropdown-toggle dropdown-auto-size form-control input-sm visible-xs visible-sm pull-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="week">Week</option>
                            <option value="period">Period</option>
                            <option value="custom">Custom</option>
                            <option value="historic">Historic</option>
                        </select>
                    </div>
                </div>
            
                <table class="table">
                    <tr style="font-weight:bold;">
                        <td>Date</td>
                        <td>Rev</td>
                        <td>DC</td>
                        <td>C/I(L)</td>
                        <td>C/I(Z)</td>
                        <td>C/O(L)</td>
                        <td>C/O(Z)</td>
                        <td>Activity</td>
                        <td>Remark</td>
                        <td>From</td>
                        <td>STD(L)</td>
                        <td>STD(Z)</td>
                        <td>To</td>
                        <td>STA(L)</td>
                        <td>STA(Z)</td>
                        <td>AC/Hotel</td>
                        <td>BLH</td>
                        <td><nobr>Flight Time</nobr></td>
                        <td><nobr>Night Time</nobr></td>
                        <td>Dur</td>
                        <td>Ext</td>
                        <td><nobr>Pax booked</nobr></td>
                        <td>ACReg</td>
                        <td>CrewMeal</td>
                        <td>Resources</td>
                        <td>CC</td>
                        <td>Name</td>
                        <td>Pos.</td>
                        <td><nobr>Work Phone</nobr></td>
                        <td><nobr>DH Crew</nobr></td>
                        <td><nobr>DH Name</nobr></td>
                        <td><nobr>DH Seat</nobr></td>
                        <td>Remarks</td>
                        <td><nobr>Fdp Time</nobr></td>
                        <td><nobr>Max Fdp</nobr></td>
                        <td><nobr>Rest Compl.</nobr></td>
                    </tr>
                    @if (!empty($roster_data))
                        @foreach ($roster_data as $keys => $record)
                            <tr>
                                @foreach ($record as $col => $value)
                                    <td>{{ $value }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    @endif
                </table>  
    </body>
</html>