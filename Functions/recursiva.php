<?php
    $hirerquia = array(
        array(
            'cargo'=> 'CEO',
            'subordinados' => array(
                array(
                    'cargo' => 'Diretor Comercial',
                    'subordinados' => array(
                        'cargo' => 'Gerente de Vendas'
                    )
                ),
                array(
                    'cargo' => 'Diretor de TI',
                    'subordinados' => array(
                        'cargo' => 'suporte',
                        'subordinados' => array(
                            'cargo' => 'estagiario'
                        ),
                        array(
                            'cargo' =>  ' diretor Desenvolvimento',
                            'subordinados' => array(
                                'cargo' => 'chefe back-end',
                                'subordinados' => array(
                                    'cargo' => 'desenvolvedor back-end'
                                )
                            ),
                            array(
                                'cargo' => 'chefe front-end',
                                'subordinados' => array(
                                    'cargo' => 'desenvolvedor front-end'
                                )
                            )
                        )
                    )
                )
            )
        )
    );

function exibe($cargos){
        $html = '<ul>';
        foreach($cargos as $cargo){
            $html .= "<li>";
            $html .= $cargo['cargo'];
                if(isset($cargo['subordinados']) && count($cargo['subordinados'])> 0){
                    $html .= exibe($cargo['subordinados']);
                }
            $html .= "</li>";
        }
        $html .= '</ul>';
    return $html;
}
echo exibe($hirerquia);
?>