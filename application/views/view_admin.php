<div class="container">

	<div class="row">
  <div class="col-lg-12" >
  <h2>Заявки пользователей</h2>
		<table class="table">
			<tr>   <th> Дата </th>
      <th> ФИО пользователя </th>
            <th>Название заявки</th>
				<th> Описание</th>
				<th>Категория</th>
                <th>Статус</th>
                <th>Действие</th>   

			</tr>
      <?php
            foreach($applic as $row) {
              echo'<tr> <td>'.$row['date_start'].'</td>
              <td>'.$row['fio'].'</td>
              <td>'.$row['name'].'</td>
            <td>'.$row['discription'].'</td> 
              <td>'.$row['name_category'].'</td>
              <td>'.$row['status'].'</td>';
                  if( $row['status'] == "Новая"){
                    echo'<<td> <button type="button" class="btn btn-dark"><a href ="applic/status/'.$row['id_zayavki'].'"">Принять</button>';  
                      echo'<button type="button" class="btn btn-dark"><a href =""">Отклонить</button>';  
                      }    
                        if( $row['status'] == "Принято"){
                          echo'<<td> <button type="button" class="btn btn-dark"><a href =""">Решено</button>';  
                        }                 
                    echo  '</td>   
                    </tr>';   
        
        }

        ?>
            </table>
  </div>
          </div>	
        </div>