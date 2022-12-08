<table id="example" class="display compact nowrap" style="width:100%;font-size:0.8rem;">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tp.Viagem</th>
            <th>Tp.Passagem</th>
            <th>Dt.Ida</th>
            <th>Dt.Volta</th>
            <th>Bagagem</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Adultos</th>
            <th>Crianc.1</th>
            <th>Crianc.2</th>
            <th>Dt.Cotaçao</th>
        </tr>
    </thead>
    <tbody>
        <?php if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?=$row['nome'];?></td>
                    <td><?=$row['tipo_viagem'];?></td>
                    <td><?=$row['tipo_passagem'];?></td>
                    <td><?=$row['data_ida'];?></td>
                    <td><?=$row['data_volta'];?></td>
                    <td><?=$row['bagagem'];?></td>
                    <td><?=$row['email'];?></td>
                    <td><?=$row['telefone'];?></td>
                    <td><?=$row['adultos'];?></td>
                    <td><?=$row['criancas_1'];?></td>
                    <td><?=$row['criancas_2'];?></td>
                    <td><?=$row['created'];?></td>

                </tr>

        <?php } } ?>

    </tbody>
</table>