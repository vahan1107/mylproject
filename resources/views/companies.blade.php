<h1>Getting companies</h1>

<table>
    <thead>
        <tr>
            <th> id</th>
            <th> name</th>
            <th> email </th>
            <th> logo</th>
            <th> website </th>
        </tr>
    </thead>
    <tbody>
         @foreach($companies as $company)
          <tr>
              <td> {{$company->id}} </td>
              <td> {{$company->name}} </td>
              <td> {{$company->email}} </td>
              <td> <img src="{{asset('storage/logo/'.$company->logo)}}"> </td>
              <td> <a href="{{$company->website}}">{{$company->name}}</a> </td>
          </tr>
         @endforeach
   </tbody>
</table>