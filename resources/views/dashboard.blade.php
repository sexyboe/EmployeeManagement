@extends('layouts.app')
@extends('layouts.sidebar')
@section('title','Dashboard')
@section('container')
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  @if(in_array(auth()->user()->role, ['admin']))


<div class="dashboard">
<b>Welcome Admin {{auth()->user()->name}}</b>

  {{-- <div class="container_form">
    <form action="/addEmployee" method="POST"  enctype="multipart/form-data">
      @csrf
      <h3>Add a post</h1>
    
      <label>Message :</label><br>
            <textarea name="detail" id="" cols="10" rows="5" > </textarea>
            <br>
            
            
      <input type="file" id="dp" name="profile_photo" placeholder="choose  photo .."> 
    
      <hr>
      <input type="submit" value="Post" class="add">
    </form>
  </div>
</div> --}}
  @endif



  @if(in_array(auth()->user()->role, ['user']))

  <div class="dashboard">

    <div class="leave-container cards">
      {{-- Welcome {{$file->name}} --}}
      {{-- <a href="/my_leave_list/{{$user_id}}"> Leave history</a> --}}
      {{-- <a href="/my_leave_list/{{Auth::id()}}"> Leave history</a> --}}
    </div>
    <div class="leave-container cards">
<p> </p>
{{-- <img src="/dp/{{$file->dp}}" width=70px style = "border-radius: 60%; box-shadow: -1px  2px 1px 2px #4c4a4aad; " >
    </div> --}}

  </div>

@endif
@endsection




<style>


.dashboard{
  display: flex;
  flex-direction:row-reverse;
  width: 100vw;


  
}

 input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  .container_form {
    border-radius: 1px;
    background-color: #f2f2f2;
    padding: 30px;
  }

  h3{

    width: 100%;
    padding: 4px;
    color: rgb(64, 88, 211);
  }

  .calc{
padding: 4px;
    background-color: #ccc;
    cursor: pointer;
  }
  
  .calc:hover{
font-size: 1.06rem;
    background-color: rgb(209, 209, 209);
    cursor: pointer;
border-radius:5px; 
  }


p.title{
  font-size: 1.5rem;
  padding: 4px;
  margin: 5px;
}

.add
{
  position: relative;
  float: right; 
  top: 25px;
}

















.container_form{
  background-color: rgb(164, 193, 198);
  display: flex;
  padding: 20px;
  flex-direction: row;

  box-shadow: 0px 2px 2px 1px #686767af;
}

.dashboard{
  padding-top: 20px;
width: 100%;
  flex-wrap: wrap;
  justify-content: center;
column-gap: 10px;
row-gap: 10px;
  display: flex;
flex-direction: row;


}

  .sidebar{
    
  }
  
  .button_ button:hover{
    background-color: rgb(255, 255, 255);
  }
  .title{
    width: 500px;
    display: flex;
justify-content: center;
background-color: #adbece;
  }
  
 
  
  
  .input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
  }
  
  .icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
  }
  
  .input-field {
    width: 100%;
    padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  color: rgb(0, 0, 0);
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  background-color: aquamarine;


}

.btn>a{
  text-decoration:none;
  font-size: 1.2rem;
color: black;
}

.button_{
  display: flex;
  position: relative;
  flex-direction: row;
  background-color: rgb(153, 164, 174);




}

  </style>
