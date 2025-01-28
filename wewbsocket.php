<!DOCTYPE html>
    <HTML>
        <head>
            <meta charset="utf-8">
            <title>Andon Control Quality</title>
            <link rel="stylesheet" href="css4.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.2/mqttws31.min.js" type="text/javascript"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="demo.js" type="text/javascript"></script>
         </head>
         <body>
            <div class="wrapper">
               <h1 id="Main_heading"> <b>Iot Dashboard Control Andon Quality</b></h1><br><br>
               <form id="connection-information-form">
                 
                  <b>Subscription Topic And Publish Topic:</b>
                  <input list="topic" id="topic_s" name="topic_s" value=""><br><br>
                     <datalist id="topic">
                        <option value="Produksi 1.1">
                        <option value="Produksi 1.2">
                        <option value="Produksi 2">
                        <option value="Produksi 3">
                     </datalist>

                  <input id="connect" class="connect"type="button" onclick="startConnect()"  value="Connected"><br><br>

                  <br><b>Pilih Jenis Part:</b>
                  <input list="line"id="topic_p" type="text" name="1" value="">
                     <datalist id="line">
                        <option value="OTR 3M0A RR RH">
                        <option value="OTR 3M0A RR LH">
                        <option value="OTR 3M0A FR RH">
                        <option value="OTR 3M0A FR LH">
                        <option value="INR 3M0A RR RH">
                        <option value="INR 3M0A RR LH">
                        <option value="INR 3M0A FR RH">
                        <option value="INR 3M0A FR LH">
                        <option value="OTR 560B RR LH (BR)">
                        <option value="OTR 560B RR RH (BR)">
                        <option value="OTR 560B FR LH (BR)">
                        <option value="OTR 560B FR RH (BR)">
                        <option value="OTR 560B RR LH (BK)">
                        <option value="OTR 560B RR RH (BK)">
                        <option value="OTR 560B FR LH (BK)">
                        <option value="OTR 560B FR RH (BK)">
                        <option value="INR 560B RR RH">
                        <option value="INR 560B RR LH">
                        <option value="INR 560B FR RH">
                        <option value="INR 560B FR LH">
                        <option value="OTR 3K RR RH">
                        <option value="OTR 3K RR LH">
                        <option value="OTR 3K FR RH">
                        <option value="OTR 3K FR LH">
                        <option value="INR 3K RR RH">
                        <option value="INR 3K RR LH">
                        <option value="INR 3K FR RH">
                        <option value="INR 3K FR LH">
                        <option value="OTR T86 RR RH">
                        <option value="OTR T86 RR LH">
                        <option value="OTR T86 FR RH">
                        <option value="OTR T86 FR LH">
                        <option value="INR T86 RR RH">
                        <option value="INR T86 RR LH">
                        <option value="INR T86 FR RH">
                        <option value="INR T86 FR LH">
                        <option value="OTR D30 RR RH">
                        <option value="OTR D30 RR LH">
                        <option value="OTR D30 FR RH">
                        <option value="OTR D30 FR LH">
                        <option value="INR D30 ">
                        <option value="OTR D26">
                        <option value="MLD D26">
                     </datalist>
                     <b>Pilih Jenis Problem (NG):</b><br>
                     <input list="line2"id="topic_x" type="text" name="topic_x" value="">
                     <datalist id="line2">
                        <option value="SCRATCH">
                        <option value="BUBBLE">
                        <option value="BINTIK">
                        <option value="CRACK">
                        <option value="JOINT SOBEK">
                        <option value="NAGARE">
                        <option value="BURRY">
                        <option value="CUTTING MIRING">
                        <option value="CUTTING GREPES">
                        <option value="KEPENDEKAN">
                        <option value="KEPANJANGAN">
                        <option value="STAMP T/A">
                        <option value="MARKING T/A">
                        <option value="DATUM T/A">
                        <option value="DOUBLE TIP T/A">
                        <option value="FLEK">
                        <option value="GRAZE MARK">
                        <option value="NEALING GESER">
                        <option value="DING">
                        <option value="DEFOM">
                        <option value="MIZUATO">
                        <option value="ENCAPE T/A">
                        <option value="SOKUMO BOTAK">
                        <option value="SOKUMO TIPIS">
                        <option value="SOKUMO KASAR">
                        <option value="MEANI">
                        <option value="GOMPAL">
                        <option value="PEEL OFF">
                        <option value="DATANG KE PDI">
                     </datalist>

                     <b class="text1">Masukan Jumlah:</b><br><br>
                     <input list="angka" class="number" type="number"  id="number" value="">
                     <datalist id="angka">
                        <option value="1">
                        <option value="2">
                        <option value="3">
                        <option value="4">
                        <option value="5">
                        <option value="6">
                        <option value="7">
                        <option value="8">
                        <option value="9">
                        <option value="10">
                        <option value="11">
                        <option value="12">
                        <option value="13">
                        <option value="14">
                        <option value="15">
                        <option value="16">
                        <option value="17">
                        <option value="18">
                        <option value="19">
                        <option value="20">
                        <option value="21">
                        <option value="22">
                        <option value="23">
                        <option value="24">
                        <option value="25">
                        <option value="26">
                        <option value="28">
                        <option value="29">
                        <option value="30">
                        <option value="31">
                        <option value="32">
                        <option value="33">
                        <option value="34">
                        <option value="35">
                        <option value="36">
                        <option value="37">
                        <option value="38">
                        <option value="39">
                        <option value="40">
                        <option value="41">
                        <option value="42">
                        <option value="43">
                        <option value="44">
                        <option value="45">
                     </datalist>
                     
                     <b class="text2">Satuan:</b><br><br>
                     <input list="satuan" class="qty" type="text"  id="qty" value="">
                     <datalist id="satuan">
                        <option value="PCS">
                        <option value="KANBAN">
                     </datalist>

                  <div class="kata">
                     <input id="Hay" type="button" onclick="publishMessage1On()" name="1" value="TRUN ON"><br>
                     <input id="Hallo" type="button" onclick="publishMessage1Off()"  name="0" value="TRUN OFF">
                    </div><br> 
                  
               </form><br>
               <div id="messages"></div>
            </div>
    </HTML>