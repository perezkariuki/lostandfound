<?php  
 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "lostandfound");  
      $sql = "SELECT * FROM  lostitems ORDER BY idLost ASC";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["idLost"].'</td>
                          <td>'.'<img src="../img/'.$row['img'].'" width="100px", height:"100px">'.'</td>
                          <td>'.$row["category"].'</td>  
                          <td>'.$row["serial"].'</td>  
                          <td>'.$row["brand"].'</td>
                          <td>'.$row["colour"].'</td>
                          <td>'.$row["datetime"].'</td>
                          <td>'.$row["location"].'</td>
                          <td>'.$row["description"].'</td>
                          <td>'.$row["credentials_id"].'</td>   
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["lost_pdf"]))  
 {  
      require_once('../tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Exporting User Verification Form to Pdf");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Exporting User Verification Form to Pdf</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
          <tr>  
               <th width="10%">IdLost</th>  
               <th width="15%">img</th>  
               <th width="15%">category</th>  
               <th width="15%">serial</th>  
               <th width="10%">brand</th>
               <th width="12%">colour</th>
               <th width="12%">datetime</th> 
               <th width="12%">location</th> 
               <th width="12%">description</th>
               <th width="12%">credentials_id</th>  
          </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Exporting User Verification Form to Pdf</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Exporting User Verification Form to Pdf</h3><br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="10%">IdLost</th>  
                               <th width="15%">img</th>  
                               <th width="15%">category</th>  
                               <th width="20%">serial</th>  
                               <th width="20%">brand</th>
                               <th width="12%">colour</th>
                               <th width="12%">datetime</th> 
                               <th width="12%">location</th> 
                               <th width="12%">description</th>
                               <th width="12%">credentials_id</th> 
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="lost_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  