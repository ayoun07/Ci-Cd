<?php
namespace Safebase\dao;

class Requete {
    public const SEL_TYPE_BASE = "SELECT id, nom, version 
                                    FROM type";
    public const SEL_CRON = "SELECT id, nom, recurrence, date_demarrage,FK_database 
                            FROM tache_cron";
    public const SEL_CLIENT_DATABASE = "SELECT id, nom, password, port, url, used_type, user_database
                                        FROM client_database";
    public const SEL_ALERT = "  SELECT A.id, message, date_execution, nom, 
                                FROM alert A, client_database C
                                WHERE FK_DATABASE=  C.id";
    public const INS_DATABASE = "INSERT INTO client_database
         (nom,password, port,url, used_type, user_database, FK_Type)
        values(:nom, :password, :port, :url,:used_type, :user, :type_base)";

}
