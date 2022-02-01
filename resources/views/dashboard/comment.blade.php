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
                    comment
                  </th>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>
                      {{ $user->name }}
                    </td>
                    <td>
                      @foreach ($user->information as $information)
                      @if ($loop->index==0)
                      {{ $information->comment  }}
                      @else
                     <br /> 
                     <br />
                     {{ $information->comment  }}
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