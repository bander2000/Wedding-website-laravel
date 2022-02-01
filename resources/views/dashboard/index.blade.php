@extends('dashboard.layout')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Name
                  </th>
                  <th>
                    email
                  </th>
                  <th>
                    Attend
                  </th>
                  <th class="text-right">
                    Number of Guest
                  </th>
                  <th class="text-right">
                  Amount
                  </th>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>
                      {{ $user->name }}
                    </td>
                    <td>
                      {{ $user->email }}
                    </td>

                      <td class="text-center">
                        @foreach ($user->information as $information)
                        @if ($loop->index==0)
                        {{ $information->attend  }} 
                        @else
                          , {{ $information->attend  }} 
                        @endif
                        @endforeach
                    </td>
                    <td class="text-center">
                      @foreach ($user->information as $information)
                      @if ($loop->index==0)
                      {{ $information->Numberofguests  }}
                      @else
                     , {{ $information->Numberofguests  }}
                      @endif
                      
                      @endforeach
                    </td>
                    <td class="text-center">
                      @foreach ($user->money as $money)
                      @if ($loop->index==0)
                      {{ $money->amount  }} $
                      @else
                      , {{ $money->amount  }} $
                      @endif
                      @endforeach
                    </td>


                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection