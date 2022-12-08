<table id="example" class="display compact nowrap" style="width:100%;font-size:0.7rem;">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tp.Viag.</th>
            <th>Tp.Pass.</th>
            <th>Dt.Ida</th>
            <th>Dt.Volta</th>
            <th>Bagag.</th>
            <th>E-mail</th>
            <th>Tel.</th>
            <th>Adultos</th>
            <th>C.1</th>
            <th>C.2</th>
            <th>Dt.Cotaçao</th>
        </tr>
    </thead>
    <tbody>
        <?php if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 


                $data_ida =  str_replace("/", "-", $row["data_ida"]);// dd-mm-aaaa
                $data_volta = str_replace("/", "-", $row["data_volta"]);// dd-mm-aaaa
                $created = strtotime($row['created']);

                
                $data_volta_formatted = date('d/m/y', strtotime($data_volta));// dd/mm/aa
                $created_formatted = date("d/m/y H:i", $created);// dd/mm/aa

                if (  strtotime($data_ida) == true )  {
                $data_ida_formatted = date('d/m/y', strtotime($data_ida));
                } else { $data_ida_formatted = ""; }
           
                if ( strtotime($data_volta) == true ) {
                     $data_volta_formatted = date('d/m/y', strtotime($data_volta));
                 } else { $data_volta_formatted = "";}
            
            ?>
            <tr>
                <td><?=$row['nome'];?></td>
                <td><?=$row['tipo_viagem'];?></td>
                <td><?=$row['tipo_passagem'];?></td>
                <td><?=$data_ida_formatted;?></td>
                <td><?=$data_volta_formatted;?></td>
                <td><?=$row['bagagem'];?></td>
                <td><?=$row['email'];?></td>
                <td><?=$row['telefone'];?></td>
                <td><?=$row['adultos'];?></td>
                <td><?=$row['criancas_1'];?></td>
                <td><?=$row['criancas_2'];?></td>
                <td><?=$created_formatted;?></td>

            </tr>

        <?php } } ?>

    </tbody>
</table>