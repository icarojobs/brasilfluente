<?php
if (!function_exists('set_active')) {
    function set_active($path, $active = 'active')
    {
        return Request::is($path) ? $active : '';
    }
}
/*
 * @author Icaro William
 * @description Helper Global para converter Data Americana para Brasileira
 */
if (!function_exists('date_to_br')) {
    function date_to_br($date)
    {
        return date('d/m/Y', strtotime($date));
    }
}
/*
 * @author Icaro William
 * @description Helper Global para converter Brasileira para Y-m-d
 */
if (!function_exists('date_to_us')) {
    function date_to_us($date)
    {
        $dateSanitized = str_replace('/', '-', $date);
        return date('Y-m-d', strtotime($dateSanitized));
    }
}
/*
 * @author Icaro William
 * @description Helper Global para converter valor ou moeda brasileira no padrão americano
 * @params double Retorna o valor em double
 * @params string Retornao valor em string, sem pontos e sem virgula
 */
if (!function_exists('moeda_us')) {
    function moeda_us($value, $return_type = 'double')
    {
        if (!strpos($value, ',') === true) {
            if ($return_type == 'double') {
                // nao tem virgula:
                return number_format($value, 2, '.', '');
            }
            return "" . str_replace('.', '', number_format($value, 2, '.', ''));
        }
        // tem virgula:
        $remove_point = str_replace('.', '', $value);
        $replace_comma = str_replace(',', '.', $remove_point);
        $new_value = trim($replace_comma);
        $valor = floatval($new_value);
        if ($return_type == 'double') {
            return number_format($valor, 2, '.', '');
        }
        return "" . str_replace('.', '', number_format($valor, 2, '.', ''));
    }
}
/*
 * @author Icaro William
 * @description Helper Global para converter valor ou moeda americano no padrão brasileira
 * @params double Retorna o valor em double
 * @params string Retornao valor em string, sem pontos e sem virgula
 */
if (!function_exists('moeda_br')) {
    function moeda_br($value, $return_type = 'double')
    {
        if (!strpos($value, ',') === true) {
            if ($return_type == 'double') {
                // nao tem virgula:
                return number_format($value, 2, ',', '.');
            }
            return "" . str_replace('.', '', number_format($value, 2, ',', '.'));
        }
        // tem virgula:
        $remove_point = str_replace('.', '', $value);
        $replace_comma = str_replace(',', '.', $remove_point);
        $new_value = trim($replace_comma);
        $valor = floatval($new_value);
        if ($return_type == 'double') {
            return number_format($valor, 2, ',', '.');
        }
        return "" . str_replace('.', '', number_format($valor, 2, ',', '.'));
    }
}
/*
 * @author Icaro William
 * @description Helper Global para remover caracteres especiais de uma string
 */
if (!function_exists('clear_string')) {
    function clear_string($string): string
    {
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
    }
}
/*
 * @author Icaro William
 * @description Helper Global para remover acentos de um request
 */
if(!function_exists('clear_request_params'))
{
    function clear_request_params($array, $request)
    {
        foreach ($array as $value)
        {
            $request->merge([
                $value => clear_string($request->$value),
            ]);
        }
    }
}
/*
 * @author Icaro William
 * @description Helper Global para exibir mensagem de alerta
 */
if (!function_exists('mensagem')) {
    function mensagem($message = '')
    {
        print("<script type='text/javascript'>alert('" . $message . "');</script>");
    }
}
/*
 * @author Icaro William
 * @description Helper Global para redirecionar usuário entre rotas
 */
if (!function_exists('go_to')) {
    function go_to($location = '')
    {
        print("<script type='text/javascript'>window.location.href='" . url($location) . "'</script>");
    }
}
/*
 * @author Icaro William
 * @description Helper Global para redirecionar usuário para a pagina anterior
 */
if (!function_exists('back_one')) {
    function back_one()
    {
        print("<script type='text/javascript'>window.history.back();</script>");
        exit;
    }
}
/*
 * @author Icaro William
 * @description Helper Global para validar CPF
 */
if (!function_exists('cpf_validate')) {
    function cpf_validate($cpf)
    {
        $cpf = preg_replace('/[^0-9]/', '', (string)$cpf);
        // Valida tamanho
        if (strlen($cpf) != 11)
            return false;
        // Calcula e confere primeiro dígito verificador
        for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
            $soma += $cpf{$i} * $j;
        $resto = $soma % 11;
        if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto))
            return false;
        // Calcula e confere segundo dígito verificador
        for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
            $soma += $cpf{$i} * $j;
        $resto = $soma % 11;
        return $cpf{10} == ($resto < 2 ? 0 : 11 - $resto);
    }
}
/*
 * @author Icaro William
 * @description Helper Global para validar CNPJ
 */
if (!function_exists('cnpj_validate')) {
    function cnpj_validate($cnpj)
    {
        $cnpj = preg_replace('/[^0-9]/', '', (string)$cnpj);
        // Valida tamanho
        if (strlen($cnpj) != 14)
            return false;
        // Valida primeiro dígito verificador
        for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++) {
            $soma += $cnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        if ($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto))
            return false;
        // Valida segundo dígito verificador
        for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++) {
            $soma += $cnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        return $cnpj{13} == ($resto < 2 ? 0 : 11 - $resto);
    }
}
/*
 * @author Icaro Jobs
 * @description Global Helper to validate phone number
*/
if(!function_exists('validate_phone'))
{
    function validate_phone($phone)
    {
        if( strlen($phone) === 15 )
        {
            $last_phone_digits = substr($phone, 6 );
        }
        else{
            $last_phone_digits = substr($phone, 5 );
        }
        $not_allowerd = array(
            "0000-0000",
            "1111-1111",
            "2222-2222",
            "3333-3333",
            "4444-4444",
            "5555-5555",
            "6666-6666",
            "7777-7777",
            "8888-8888",
            "9999-9999");
        if( preg_grep("/$last_phone_digits/", $not_allowerd) )
        {
            return false;
        }
        return true;
    }
}

if (!function_exists('first_name')) {
    function firstName($name)
    {
        return title_case(explode(' ', $name)[0]);
    }
}

if( !function_exists('day_of_week') )
{
    function day_of_week($number)
    {
        $days = [
            1 => 'Segunda',
            2 => 'Terça',
            3 => 'Quarta',
            4 => 'Quinta',
            5 => 'Sexta',
            6 => 'Sábado',
            7 => 'Domingo'
        ];
        
        return $days[$number];
    }
}

if( !function_exists('get_available') )
{
    function get_available($number)
    {
        return ($number == 0 ? 'Indisponível' : 'Disponível');
    }
}

if( !function_exists('get_full_time') )
{
    function get_full_time($number)
    {
        return ($number == 0 ? 'Não' : 'Sim');
    }
}

if( !function_exists('get_age') )
{
    function get_age($us_date)
    {
        $date = new DateTime($us_date);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
    }
}