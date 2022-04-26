# Query del Jean

```sql
select distinct object_name(id) from syscomments

where texttype = 0 and text like '%PERS_APELLIDO_PATERNO%'

order by object_name(id) DESC
```