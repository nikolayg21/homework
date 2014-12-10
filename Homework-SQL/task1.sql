SELECT Name, SurfaceArea
FROM Continent 
WHERE (Continent LIKE "Asia" OR Continent LIKE "South America") AND SurfaceArea < 130000;