<style>
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #301783;
  color: white;
}
</style>
@extends('layouts.triallay')

@section('trial')
     <table id="customers">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>School_id</th>
                        <th>Num of Campaigns</th>
                        <th>Num of Contributions</th>
                    </tr>
                    @foreach ( $users as $u )
                    <tr>
                        <td>{{ $u->name }}</td>
                        <td style="text-transform:uppercase;">{{ $u->email }}</td>
                        <td>{{ $u->username }}</td>
                        <td>{{ $u->school_id }}</td>
                        <td>{{ $u->campaign_num }}</td>
                        <td>{{ $u->contribution_num }}</td>
                    </tr>

                    @endforeach
                 </table>

@endsection
