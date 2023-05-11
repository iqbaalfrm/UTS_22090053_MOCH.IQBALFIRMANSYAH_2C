<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>
<?php 
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL =>'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET'
));
$response = curl_exec($curl);
curl_close($curl);
$response_array = json_decode($response, true);
$onscreen = '<table>
                    <thead>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Jual</th>
                    <th>Quantity</th>
                    </thead>
                ';
foreach ($response_array as $resp) {
    if(substr($resp['i_name'], 0, 1) === "L"){
    $onscreen .='<tr>
                    <td>' . $resp['i_code'] . '</td>
                    <td>' . $resp['i_name'] . '</td>
                    <td>' .'Rp. ' . $resp['i_sell'] . '</td>
                    <td>' . $resp['i_qty'] .' </td>
                </tr>';
}}
$onscreen.='</table>';
echo $onscreen;
?>
