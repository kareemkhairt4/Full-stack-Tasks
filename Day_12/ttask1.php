
// TASK 1
CREATE VIEW student_courses AS
SELECT c.title, COUNT(e.student_id) AS total
FROM courses c
LEFT JOIN enrollments e ON c.id = e.course_id
GROUP BY c.id;


// TASK 2
CREATE VIEW student_courses AS
SELECT student_id
FROM enrollments
GROUP BY student_id
HAVING COUNT(course_id) = (
  SELECT COUNT(course_id)
  FROM enrollments
  GROUP BY student_id
  ORDER BY COUNT(course_id)
  LIMIT 1
);
ده بقا اللي هيطبع كل الطلاب اللي عندهم اقل عدد من الكورسات مش طالب واحد


// TASK 3
CREATE VIEW student_courses AS
SELECT name FROM students
WHERE id NOT IN (SELECT student_id FROM enrollments);



// TASK 4
CREATE VIEW student_courses AS
SELECT student_id, COUNT(*)  as total
FROM enrollments
GROUP BY student_id;
