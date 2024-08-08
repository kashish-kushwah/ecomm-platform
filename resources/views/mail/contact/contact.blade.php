@extends("layouts.empty")
@section("content")
<table>
  <tr>
    <td>Name</td>
    <td>{{ $name }}</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>{{ $email }}</td>
  </tr>
  <tr>
    <td>Phone</td>
    <td>{{ $phone }}</td>
  </tr>
  <tr>
    <td>Subject</td>
    <td>{{ $subject }}</td>
  </tr>
  <tr>
    <td>Message</td>
    <td>{{ $content }}</td>
  </tr>
</table>
@endsection