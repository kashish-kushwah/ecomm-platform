@extends('layouts.app')
@section('content')
  <div class="padding-large">

    <div class="container">
      <div class="row">
        <div class="col-7">
          <h3>Select Any address</h3>
          <form action="{{ route('front.cart.summary') }}" method="post">
          @csrf
            <table class="table table-hover">
              @forelse ($items as $address)
                <tr>
                  <td>
                    <div>Address Type: {{ $address->title }}</div>
                    <div>Address Line1: {{ $address->address_line1 }}</div>
                    <div>Address Line2: {{ $address->address_line2 }}</div>
                    <div>City: {{ $address->address_city }}</div>
                    <div>State: {{ $address->address_state }}</div>
                    <div>Country: {{ $address->address_country }}</div>
                    <div>Zipcode: {{ $address->address_zipcode }}</div>
                    <div><input {{ $loop->index == 0 ? 'checked' : '' }} type="radio" name="selected_address"
                        value="{{ $address->id }}" id=""></div>
                  </td>
                </tr>
              @empty
                No address found
              @endforelse
              @if (count($items) > 0)
                <tr>
                  <td>
                    <button type="submit" class="btn btn-primary">Proceed With Address</button>
                  </td>
                </tr>
              @endif
            </table>
          </form>
        </div>
        <div class="col-5">
          <h3>Add New Address</h3>
          <form action="{{ route('front.cart.shipping.storeShipping') }}" method="post">
            @csrf
            <table class='table table-hover'>
              <tr>
                <td><input type="tel" name="title" placeholder="Address Type" id=""></td>
              </tr>
              <tr>
                <td><input type="tel" name="address_line1" placeholder="Address Line 1" id=""></td>
              </tr>
              <tr>
                <td><input type="tel" name="address_line2" placeholder="Address Line 2" id=""></td>
              </tr>
              <tr>
                <td><input type="tel" name="address_city" placeholder="City" id=""></td>
              </tr>
              <tr>
                <td><input type="tel" name="address_state" placeholder="State" id=""></td>
              </tr>
              <tr>
                <td><input type="tel" name="address_country" placeholder="Country" id=""></td>
              </tr>
              <tr>
                <td><input type="tel" name="address_zipcode" placeholder="Zipcode" id=""></td>
              </tr>
              <tr>
                <td><button type="submit" class="btn btn-primary">Save Address</button></td>
              </tr>

            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
