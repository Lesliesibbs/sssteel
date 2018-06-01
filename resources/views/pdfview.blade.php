<p>
  trish is a prick
</p>
<table>


<tr>

    <th>
      Title
    </th>
    <th>
      Description
    </th>
    <th>
      Condition
    </th>
    <th>
      Cleanliness
    </th>

</tr>
<tr>
  <th>
    Packages
  </th>
</tr>
<tr>
  <th>
    Description
  </th>
</tr>
<tr>
  <th>
    City
  </th>
</tr>
<tr>
  <th>
    Country
  </th>
</tr>
<tr>
  <th>
    Duration
  </th>
</tr>
<tr>
  <th>
    Arrival Date
  </th>
</tr>
<tr>
  <th>
    Departure Date
  </th>
</tr>
<tr>
  <th>
    Gallery
  </th>
</tr>




@foreach($holidays as $holidays)
<tr>
  <td>
    {{$holidays->title}}
  </td>
  <td>
    {{$holidays->packages}}
  </td>
  <td>
    {{$holidays->description}}
  </td>
  <td>
    {{$holidays->city}}
  </td>
  <td>
    {{$holidays->country}}
  </td>
  <td>
    {{$holidays->duration}}
  </td>
  <td>
    {{$holidays->arrival_date}}
  </td>
  <td>
    {{$holidays->departure_date}}
  </td>
  <td>
    <img src="{{asset($holidays->gallery)}}" width="50" height="50">
  </td>
  </tr>
@endforeach


</table>
