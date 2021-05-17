<?php
$toCheck = array(
    "1620652145950430,just-prod-sql_-1039827942,kraken,10.1.17.101,42081,346256,QUERY,banking,'SELECT b0_.id AS id_0, b0_.date AS date_1, b0_.value AS value_2, b0_.internal_bank_account_id AS internal_bank_account_id_3, b0_.currency_id AS currency_id_4 FROM balance b0_ INNER JOIN internal_bank_account i1_ ON b0_.internal_bank_account_id = i1_.id WHERE i1_.account_number = 545536511 ORDER BY b0_.date DESC LIMIT 1’,0"
    ,"1620722218578876,just-prod-sql_-959121714,kraken,10.1.15.188,199,1567,QUERY,banking,'SELECT t0_.id AS id_0, t0_.date AS date_1, t0_.ref_id AS ref_id_2, t0_.type AS type_3, t0_.amount AS amount_4, t0_.status AS status_5, t0_.foreign_id AS foreign_id_6, t0_.valuta AS valuta_7, t0_.text AS text_8, t0_.external_transaction_id AS external_transaction_id_9, t0_.external_multipurpose_text AS external_multipurpose_text_10, t0_.booking_date AS booking_date_11, t0_.internalBankAccount_id AS internalBankAccount_id_12, t0_.currency_id AS currency_id_13 FROM transaction t0_ INNER JOIN internal_bank_account i1_ ON t0_.internalBankAccount_id = i1_.id WHERE i1_.account_number = 545547191 AND t0_.status = 110 AND t0_.type = 10',0"
    ,"1620722217137502,just-prod-sql_-959121714,kraken,10.1.15.222,150,1506,QUERY,banking,'INSERT INTO transaction (date, ref_id, type, amount, status, foreign_id, valuta, text, external_transaction_id, external_multipurpose_text, booking_date, internalBankAccount_id, currency_id) VALUES (\'2021-05-11 08:36:57\', \'609a421e87acb80012fb159b\', 1, \'-510\', 110, NULL, NULL, \'Allokierter Betrag für Trade\', NULL, NULL, NULL, 2637, 1)',0"
    ,"1620722218578876,just-prod-sql_-959121714,kraken,10.1.15.188,199,1567,QUERY,banking,'SELECT t0_.id AS id_0, t0_.date AS date_1, t0_.ref_id AS ref_id_2, t0_.type AS type_3, t0_.amount AS amount_4, t0_.status AS status_5, t0_.foreign_id AS foreign_id_6, t0_.valuta AS valuta_7, t0_.text AS text_8, t0_.external_transaction_id AS external_transaction_id_9, t0_.external_multipurpose_text AS external_multipurpose_text_10, t0_.booking_date AS booking_date_11, t0_.internalBankAccount_id AS internalBankAccount_id_12, t0_.currency_id AS currency_id_13 FROM transaction t0_ INNER JOIN internal_bank_account i1_ ON t0_.internalBankAccount_id = i1_.id JOIN balance b on i1_.id = b.internal_bank_account_id WHERE i1_.account_number = 545547191 AND t0_.status = 110 AND t0_.type = 10',0"
);
// Kommentar für Git
$zahl = 12345;
$zahl - 30;
$zahl2 = 325;
function check($checkList){

for($i =0; $i < 4; $i++) {
    /*
    preg_match('/\d*.*,(\S*),([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}),\d.*\S*,.*(FROM|INTO)\s([a-z]*_?[a-z]*_?[a-z]*)\s[a-z].*(JOIN)\s([a-z]*_?[a-z]*_?[a-z]*)/'
        , $checkList[$i], $protMatches);
    */
        preg_match('/\d*.*,(\S*),([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}),\d.*\S*,\'.*(?:FROM|INTO)\s([a-z]*_?[a-z]*_?[a-z]*)/'
        ,$checkList[$i], $protIpUser);


    preg_match_all('/(?:JOIN)\s([a-z]*_?[a-z]*_?[a-z]*)/',$checkList[$i], $protMatches);
    print_r($protIpUser);
    print_r($protMatches);

 }
}
check($toCheck);


