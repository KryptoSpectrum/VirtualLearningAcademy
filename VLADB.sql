
CREATE TABLE catalogo (
	IDCatalogoClase INT PRIMARY KEY NOT NULL,
	NombreCurso NVARCHAR (50) NOT NULL,
	Descripcion NVARCHAR(250) NOT NULL,
	Costo INT NOT NULL,
	UrlLink NVARCHAR (250) NOT NULL,
	FechaInicio DATE NOT NULL,
	FechaFin DATE NOT NULL,
	HoraInClase DATETIME NOT NULL,
	SesClase INT NOT NULL,
	CanAlumMax INT NOT NULL,
	NombreProfe NVARCHAR(50) NOT NULL
);



INSERT INTO catalogo (IDCatalogoClase, NombreCurso, Descripcion, Costo, UrlLink, FechaInicio, FechaFin, HoraInClase, SesClase, CanAlumMax, NombreProfe)

VALUES (1, 'Curso de Ingles', 'El curso de Ingles de VLA s de Ingles ejemplpo', 50, 'https://www.vla.academy/1', '2022-11-11', '2023-02-11', '2022-11-11 07:55:45.250', 3, 30, 'Juan Ramon Alvarez'),
(2, 'Curso de Marketing Digital', 'El curso de Marketing Digital de VLA ejemplo', 60, 'https://www.vla.academy/2', '2022-10-22', '2023-06-02', '2022-10-22 07:00:00.200', 2, 45, 'Lucia Mendez'),
(3,'Curso de Portuges', 'El curso Portuges de VLA ejemplo', 80, 'https://www.vla.academy/3', '2022-06-01', '2022-12-05', '2022-06-01 09:30:45.250', 5, 50, 'Ramon Baldez'),
(4, 'Curso de Excel', 'El curso de Excel de VLA ejemplo', 90, 'https://www.vla.academy/4', '2022-07-15', '2023-01-20', '2022-07-15 10:15:15.250', 1, 60, 'Maria Antonieta de las Nieves'),
(5, 'Curso de Linux', 'El curso de Linux de VLA ejemplo', 82, 'https://www.vla.academy/5', '2022-08-05', '2023-06-15', '2022-08-05 08:00:15.250', 3, 50, 'Carlos Villagran'),
(6, 'Curso de AWS', 'El curso de AWS de VLA ejemplo', 65, 'https://www.vla.academy/6', '2023-01-11', '2023-05-22', '2023-01-11 13:00:00.250', 2, 20, 'Florinda Meza'),
(7, 'Curso de Python', 'El curso de Python de VLA ejemplo', 75, 'https://www.vla.academy/7', '2022-09-26', '2023-02-11', '2022-09-26 11:00:00.250', 1, 15, 'Edgar Vidar'),
(8, 'Curso de SQL', 'El curso de SQL de VLA ejemplo', 55 , 'https://www.vla.academy/8', '2023-03-11', '2023-10-18', '2023-03-11 07:45:45.250', 2, 35, 'Julieta Calisto');