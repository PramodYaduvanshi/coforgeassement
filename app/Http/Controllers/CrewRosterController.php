<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrewRoster;
class CrewRosterController extends Controller
{
    
    public function getCrewRosterList(Request $request)
    {
        $roster_data = CrewRoster::all()->toArray();
        
        return view('crewrosterlist')->with(['roster_data'=>$roster_data]);
    }
    public function importCrewRoster(Request $request)
    {
        return view('importcrewroster');
    }
    public function uploadCrewRoster(Request $request)
    {
        // $request->validate([
        //     'import_csv' => 'required|mimes:csv',
        // ]);
        $file   = $request->file('import_csv');
        $handle = fopen($file->path(), 'r');
        fgetcsv($handle);
        $chunksize = 15;
        while (!feof($handle)) {
            $chunkdata = [];
            for ($i = 0; $i < $chunksize; $i++) {
                $data = fgetcsv($handle);
                if ($data === false) {
                    break;
                }
                $chunkdata[] = $data; 
            }
            $this->addChunkData($chunkdata);
        }
        fclose($handle);
        return redirect('crew-rosters-list')->with('success', 'Data has been added successfully.');

        //return redirect('crew-rosters-list');
    }

    public function addChunkData($chunkdata)
    {
        foreach ($chunkdata as $column) {

            $crew_roseter = new CrewRoster();
            $date = null; 
            if ($column[0] !="") {
                $date = date("Y-m-d", strtotime($column[0]));
            } 
            $crew_roseter->date         = $date;
            $crew_roseter->rev          = $column[1] ?? null;
            $crew_roseter->dc           = $column[2] ?? null;
            $crew_roseter->ci_l         = $column[3] ?? null;
            $crew_roseter->ci_z         = $column[4] ?? null;
            $crew_roseter->co_l         = $column[5] ?? null;
            $crew_roseter->co_z         = $column[6] ?? null;
            $crew_roseter->activity     = $column[7] ?? null;
            $crew_roseter->remark       = $column[8] ?? null;
            $crew_roseter->from         = $column[9] ?? null;
            $crew_roseter->std_l        = $column[10] ?? null;
            $crew_roseter->std_z        = $column[11] ?? null;
            $crew_roseter->to           = $column[12] ?? null;
            $crew_roseter->sta_l        = $column[13] ?? null;
            $crew_roseter->sta_z        = $column[14] ?? null;
            $crew_roseter->ac_holet     = $column[15] ?? null;
            $crew_roseter->blh          = $column[16] ?? null;
            $crew_roseter->flight_time  = $column[17] ?? null;
            $crew_roseter->night_time   = $column[18] ?? null;
            $crew_roseter->dur          = $column[19] ?? null;
            $crew_roseter->ext          = $column[20] ?? null;
            $crew_roseter->pax_booked   = $column[21] ?? null;
            $crew_roseter->ac_reg       = $column[22] ?? null;
            $crew_roseter->crew_meal    = $column[23] ?? null;
            $crew_roseter->resources    = $column[24] ?? null;
            $crew_roseter->cc           = $column[25] ?? null;
            $crew_roseter->name         = $column[26] ?? null;
            $crew_roseter->pos          = $column[27] ?? null;
            $crew_roseter->work_phone   = $column[28] ?? null;
            $crew_roseter->dh_crew      = $column[29] ?? null;
            $crew_roseter->dh_name      = $column[30] ?? null;
            $crew_roseter->dh_seat      = $column[31] ?? null;
            $crew_roseter->remarks      = $column[32] ?? null;
            $crew_roseter->fdp_time     = $column[33] ?? null;
            $crew_roseter->max_fdp      = $column[34] ?? null;
            $crew_roseter->rest_complish= $column[35] ?? null;
            $crew_roseter->save();
        }
    }
}
