 <div class="text-center">


     <p>Silahkan lakukan pembayaran ke :</p>
     <h5>BRI 1332-01-001002-53-8 an. MITHA FEBRIANA SITANGGANG</h5><br>
     <p>Batas Pembayaran 23:59, 22 maret 2020</p><br>

     <form method="POST" action="<?= base_url('home/pembayaran/'); ?>" enctype="multipart/form-data">



         <input type="hidden" name="id_team" class="form-control" value="<?= $team['id_team']; ?>">

         <div class="form-group">
             <label for="" class="text-danger">Upload Bukti Pembayaran </label><br>
             <input type="file" name="berkas" required id="">
         </div>
         <div class="form-group">
             <button type="submit" name="bukti" class="btn btn-dark" id="" value="submit">Submit </button>
         </div>

     </form>
 </div>