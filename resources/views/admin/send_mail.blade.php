<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
  @include('admin.css')
  <style>
  
    form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
       
        border-radius: 5px;
      
    }
    h2 {
            text-align: center;
            color: #fff;
            margin-top: 30px;
            font-size: 2.5em;
        }


    form div {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 2px solid #007bff;
        border-radius: 4px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    input[type="file"]:focus,
    select:focus,
    textarea:focus {
        border-color: #28a745;
        outline: none;
    }

    textarea {
        height: 100px;
        resize: vertical;
    }

    input[type="submit"] {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
  </style>
</head>
<!--HEADER!-->
<body id="reportsPage">
    <div class="" id="home">
    @include('admin.navbar')
                <!--body!-->
        
                <h2 style="font-size:30px; font-weight: bold;">Mail send to {{$data->name}}</h2>
            

                <form action="{{url('mail',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Greeting</label>
                <input type="text" name="greetings">
            </div>
            <div>
                <label>Mail Body</label>
                <textarea name="body"></textarea>
            </div>
            <div>
                <label>Action Text</label>
                <input type="text" name="action_text">
            </div>
            <div>
                <label>Action URL</label>
                <input type="text" name="action_url">
            </div>
            <div>
                <label>EndLine</label>
                <input type="text" name="endline">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
                <!--footer!-->
        @include('admin.footer')
</body>

</html>