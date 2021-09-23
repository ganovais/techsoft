<?php
    require('./views/sistema/widgets/header.php');
    $attendances = Attendance::getAttendanceWithUser();
?>

<div class="container">
    <div class="row">
        <div class="col-12 center">
            <h1 class="text-center mb-5">Atendimentos</h1>
            <div class="attendances card">
                <?php if(!empty($attendances)) : ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Id usuário</th>
                        <th>Usuário</th>

                        <?php foreach($attendances as $attendance) : ?>
                    <tr>
                        <td>
                            <div class="texto">
                                <?= $attendance->id ?>
                            </div>
                        </td>

                        <td>
                            <div class="texto">
                                <?= $attendance->title ?>
                            </div>
                        </td>

                        <td>
                            <div class="texto">
                                <?= $attendance->text ?>
                            </div>
                        </td>

                        <td>
                            <div class="texto">
                                <?= $attendance->user_id ?>
                            </div>
                        </td>

                        <td>
                            <div class="texto">
                                <?= $attendance->user ?>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <?php else: ?>
                    <h3>Nenhum atendimento encontrado</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php
    require('./views/sistema/widgets/footer.php');
?>