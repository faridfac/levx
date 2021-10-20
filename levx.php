<?php

while (true) {

    again:
    $randomuser = file_get_contents('https://swappery.site/data.php?qty=1');
    $json = json_decode($randomuser, true);
    $data = $json['result']['0'];
    $name = $data['firstname'] . " " . $data['lastname'];
    $pecah = explode("@", $data['email']);
    $email = $pecah[0];
    $domain = "gmailya.com";
    $mail = $email . "@" . $domain;
    echo "[+] Registration with $mail\n";
    $execute = regis($name, $mail);
    if (preg_match('/dt/i', $execute)) {
        echo "[+] Success Register\n";
        $try = 1;
        do {
            echo "[+] Getting Token -> ";
            $getLink = get_mail($domain, $email);
            $token = get_between($getLink, 'app.viral-loops.com?p=', '" style="font-family');

            if (preg_match('/eyJ/i', $token)) {
                $success = 1;
                echo "$token\n";
                echo "[+] Verify -> ";
                $dir = direct($token);
                if (preg_match('/Fully/i', $dir)) {
                    echo "Success\n\n";
                    // sleep(10);
                } else {
                    echo "Failed\n\n";
                }
            } elseif ($try == "5") {
                echo "Skip\n";
                goto again;
            } else {
                echo "Failed\n";
                $success = 0;
                $try++;
            }
        } while ($success == 0);
    } else {
        echo "$execute\n";
    }
}


function regis($name, $mail)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://app.viral-loops.com/api/v2/events');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXY, 'p.webshare.io');
    curl_setopt($ch, CURLOPT_PROXYPORT, '80');
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'etcwyirc-rotate:9anmofl3hzr7');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"params":{"event":"registration","user":{"firstname":"' . $name . '","lastname":"","email":"' . $mail . '","extraData":{},"consents":{}},"referrer":{"referralCode":"wrC3Snp"},"refSource":"copy","acquiredFrom":"popup"},"publicToken":"HvD1fm1QxOSQuJhXIE0KjrnIQ04"}');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Authority: app.viral-loops.com';
    $headers[] = 'Sec-Ch-Ua: ^^Chromium^^\";v=^^\"94^^\",';
    $headers[] = 'X-Ucid: HvD1fm1QxOSQuJhXIE0KjrnIQ04';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36 Edg/94.0.992.50';
    $headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
    $headers[] = 'Accept: */*';
    $headers[] = 'Origin: https://www.levx.io';
    $headers[] = 'Sec-Fetch-Site: cross-site';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Sec-Fetch-Dest: empty';
    $headers[] = 'Referer: https://www.levx.io/';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    return $result;
}

function get_mail($domain, $email)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://generator.email/$domain/$email",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array(
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3",
            "accept-encoding: gzip, deflate, br",
            "upgrade-insecure-requests: 1",
            "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36",
            "cookie: _ga=GA1.2.659238676.1567004853; _gid=GA1.2.273162863.1569757277; embx=%5B%22$email%40$domain%22%2C%22hcycl%40nongzaa.tk%22%5D; _gat=1; io=io=tIcarRGNgwqgtn40OGr4; surl=$domain%2F$email",
            "Content-Type: text/plain"
        ),
    ));

    $result = curl_exec($curl);
    return $result;
}

function direct($token)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://mandrillapp.com/track/click/30895797/app.viral-loops.com?p=' . $token . '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXY, 'p.webshare.io');
    curl_setopt($ch, CURLOPT_PROXYPORT, '80');
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'etcwyirc-rotate:9anmofl3hzr7');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    $headers = array();
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Sec-Ch-Ua: ^^Chromium^^\";v=^^\"94^^\",';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36 Edg/94.0.992.50';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Sec-Fetch-Site: none';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Sec-Fetch-Dest: document';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cookie: PHPSESSID=9768fa6690eb0260cf636674136c49a3';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    return $result;
}

function get_between($string, $start, $end)
{
    $string = " " . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
