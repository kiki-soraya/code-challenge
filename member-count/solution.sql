SELECT ReportsTo, count(FirstName) AS Members, round(avg(Age)) as "Average Age" 
FROM maintable_C79KR 
where ReportsTo IS NOT NULL 
GROUP BY ReportsTo 
ORDER BY ReportsTo;
