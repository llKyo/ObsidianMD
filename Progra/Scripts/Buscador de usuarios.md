#sql

----
## Buscador de usuarios

```sql
SELECT DISTINCT 
    p.PERF_RUT as "RUT", 
    pe.PERS_DV as "DV",
    u.USUA_PASSWORD as "Contraseña",
    pe.PERS_NOMBRE1 + ' ' + pe.PERS_APELLIDO_PATERNO  as "Nombre",
    tp.TPE_DESCRIPCION as "Perfil",
    tp.TPE_USO as "Perfil Desc."
FROM PERFIL as p
INNER JOIN T_PERFIL as tp ON p.PERF_T_PERFIL = tp.TPE_TIPO
INNER JOIN PERSONA as pe ON pe.PERS_RUT = p.PERF_RUT
INNER JOIN USUARIO as u ON u.USUA_RUT = p.PERF_RUT
--INNER JOIN dbo.BENEFICIO_ASIGNADO ba ON ba.BEAS_RUT = u.USUA_RUT 
WHERE p.PERF_T_PERFIL = 2
AND p.PERF_RUT > 15000000
```

