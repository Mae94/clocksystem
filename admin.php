<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/admin.css">

    <title>Admin Management system</title>
</head>
<body>
 <div id="container">
    <header>
        <div class="title">
            <h3>Time management system</h3>
        </div>
        <form action="" method="post">
        <div id="form-box">
        <!-- セレクトボックス --> 
            <select class="select-list" name="list">
                <option value="item1"selected>Select Class</option>
                <option value="item2">Newton 1</option>
                <option value="item3" >Newton 2</option>
                <option value="item4">Darwin 1</option>
                <option value="item5">Darwin 2</option>
                <option value="item6">Shakespeare 1</option>
                <option value="item7">Shakespeare 2</option>
                <option value="item8">Enstein 1</option>
                <option value="item9">Enstein 2</option>
            </select>
            
            <div id="name-text">
            <!-- テキストボックス -->
                <input type="text" class="lastname" name="Lastname" placeholder="Last Name" value="">
        
                <input type="text" class="firstname" name="Firstname" placeholder="First Name" value="">
            
                <!--Go!ボタン  -->
                <input type="submit" class="go-button" name="btn_submit" value="Go!"> 
           </div>
           <div>
              <button class="new-btn">New</button>
           </div>
       </div>
      </form>
      
    </header>
    <main>
        <!-- テーブル -->
        <table class="table table-hover">
                <thead>
                  <tr class="description">
                    <th scope="col">#</th>
                    <th scope="col">Last</th>
                    <th scope="col">First</th>
                    <th scope="col">Class</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Newton</td>
                    <td>9:00</td>
                    <td>15:00</td>  
                    <td>
                      <ul id="btns">
                          <button class="edit-btn">Edit</button>
                          <button class="report-btn">Report</button>
                          <button class="delete-btn">delete</button>
                     </ul>
                    </td>
                 </tr>
                 <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Newton</td>
                    <td>9:00</td>
                    <td>15:00</td>  
                    <td>
                      <ul id="btns">
                            <button class="edit-btn">Edit</button>
                            <button class="report-btn">Report</button>
                            <button class="delete-btn">delete</button>
                      </ul>
                      </td>
                 </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Newton</td>
                        <td>9:00</td>
                        <td>15:00</td>  
                    <td>
                      <ul id="btns">
                            <button class="edit-btn">Edit</button>
                            <button class="report-btn">Report</button>
                            <button class="delete-btn">delete</button>
                      </ul>
                    </td>
                 </tr>
                </tbody>
              </table>
    </main>
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>