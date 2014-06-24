<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Constantes
 *
 * @author ubuntu
 */
class Constantes {
    
    
    const PARAMETRO_RUTA_BASE = "directorioBaseImagenes";
    
    const SESSION_CURRENT_TAB = 'sess_curr_tab';
    
    const DATETIME_STRING_FORMAT = 'Y-m-d H:i:s';
    
    
    /* OPERACIONES DE AUDITORIA */
    const AUDITORIA_OPERACION_ALTA = "alta";
    const AUDITORIA_OPERACION_BAJA = "baja";
    const AUDITORIA_OPERACION_MODIFICACION = "modificacion";
    const AUDITORIA_OPERACION_ELIMINACION = "eliminacion";
    const AUDITORIA_OPERACION_LOGIN = "login";
    const AUDITORIA_OPERACION_LOGOUT = "logout";
    
    /* OBJETOS DE AUDITORIA */
    const AUDITORIA_OBJETO_USUARIO = "usuario";
    const AUDITORIA_OBJETO_INMUEBLE = "inmueble";
    const AUDITORIA_OBJETO_PARAMETRO = "parametro";
    
}
