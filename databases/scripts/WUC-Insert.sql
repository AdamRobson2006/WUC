-- @C:\databases\scripts\WUC-Insert.sql

-- Default Engine for FK Compatibility
SET default_storage_engine=INNODB;
USE `wuc-schema`;

-- Record Status Inserts:

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 1

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 2

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 3

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 4

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 5

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 6

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 7

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 8

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 9

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 10

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 11

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 12

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 13

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 14

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 15

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 16

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 17

INSERT INTO record_statuses (status, date_added)
VALUES (TRUE, NOW()); -- 18

-- Emergency Contact Inserts:

INSERT INTO emergency_contacts (contact_id, first_name, middle_name, surname, phone_number, record_status)
VALUES (00001226, 'Placeholder', '', 'Contact', '+44 1234', 15);

-- Departments Inserts:

INSERT INTO departments (department_name) VALUES ('Arts and Humanities');
INSERT INTO departments (department_name) VALUES ('Social Sciences');
INSERT INTO departments (department_name) VALUES ('Science and Engineering');
INSERT INTO departments (department_name) VALUES ('Business and Management');
INSERT INTO departments (department_name) VALUES ('Health Sciences');
INSERT INTO departments (department_name) VALUES ('Technology');
INSERT INTO departments (department_name) VALUES ('Education');


-- Courses Inserts for Department of Arts and Humanities (department_id = 1):

INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) English Literature', 'Study classic and contemporary literature', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) History', 'Explore human history from ancient to modern', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Philosophy', 'Examine fundamental questions about existence and knowledge', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Fine Arts', 'Develop your artistic practice and theory', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Music', 'Study music theory, performance and composition', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Theatre Studies', 'Explore drama, performance and stage production', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Linguistics', 'Study language structure, evolution and usage', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Cultural Studies', 'Analyze cultural practices and identities', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Creative Writing', 'Develop your creative writing skills across genres', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Anthropology', 'Study human societies and cultures', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Religious Studies', 'Explore world religions and beliefs', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Archaeology', 'Study human history through material remains', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Media Studies', 'Analyze media platforms and their impact', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Graphic Design', 'Learn visual communication and design principles', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Digital Media', 'Explore digital content creation and distribution', 1, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));


-- Courses Inserts for Department of Social Sciences (department_id = 2):

INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Psychology', 'Study human behavior and mental processes', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Sociology', 'Examine social structures and relationships', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Economics', 'Study production, consumption and distribution of resources', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Political Science', 'Analyze political systems and behavior', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Anthropology', 'Study human societies and cultural development', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Geography', 'Explore physical and human geography', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) International Relations', 'Study global politics and diplomatic relations', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Criminology', 'Study crime, criminal behavior and justice systems', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Social Work', 'Learn skills for supporting vulnerable populations', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Communications', 'Study human and media communication', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Development Studies', 'Examine economic and social development', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Public Administration', 'Study government policy and public service delivery', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Environmental Studies', 'Explore environmental issues and sustainability', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Urban Planning', 'Study city design and community development', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Gender Studies', 'Analyze gender roles and identity', 2, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));


-- Courses Inserts for Department of Science and Engineering (department_id = 3):

INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Physics', 'Study matter, energy and fundamental forces', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Chemistry', 'Study substances, reactions and molecular structures', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Biology', 'Study living organisms and life processes', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Mathematics', 'Study numbers, quantities and mathematical structures', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BEng (Hons) Civil Engineering', 'Design and construct infrastructure projects', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BEng (Hons) Mechanical Engineering', 'Design and manufacture mechanical systems', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BEng (Hons) Electrical Engineering', 'Study electrical systems and electronics', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BEng (Hons) Chemical Engineering', 'Convert raw materials into usable products', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Information Technology', 'Study computing systems and networks', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Environmental Science', 'Study environmental systems and solutions', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Geology', 'Study Earths composition and processes', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Astronomy', 'Study celestial objects and the universe', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Nanotechnology', 'Study materials at the molecular level', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Robotics', 'Design and build robotic systems', 3, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));


-- Courses Inserts for Department of Business and Management (department_id = 4):

INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Business Administration', 'Learn core business principles and practices', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Marketing', 'Study brand management and consumer behavior', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Finance', 'Study financial markets and investment strategies', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Human Resource Management', 'Learn talent management and organizational development', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) International Business', 'Study global commerce and cross-cultural management', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Entrepreneurship', 'Learn startup creation and business innovation', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Operations Management', 'Study business processes and supply chain efficiency', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Supply Chain Management', 'Learn logistics and distribution networks', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Strategic Management', 'Study long-term business planning and execution', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Organizational Behavior', 'Analyze workplace dynamics and team performance', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Project Management', 'Learn project planning and resource management', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Retail Management', 'Study retail operations and customer experience', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Hospitality Management', 'Learn hotel and tourism business operations', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Event Management', 'Study event planning and coordination', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) E-commerce', 'Learn online business and digital retail', 4, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));


-- Courses Inserts for Department of Health Sciences (department_id = 5):

INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Nursing', 'Learn patient care and clinical practice', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Medicine', 'Study human health and disease treatment', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Pharmacy', 'Learn medication preparation and dispensing', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Dentistry', 'Study oral health and dental treatment', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Nutrition', 'Study food science and dietary health', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Public Health', 'Learn community health promotion and disease prevention', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Physiotherapy', 'Study physical rehabilitation and movement', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Occupational Therapy', 'Learn daily living skill development', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Speech Therapy', 'Study communication disorder treatment', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Medical Laboratory Science', 'Learn diagnostic testing and analysis', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Radiography', 'Study medical imaging techniques', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Health Informatics', 'Learn healthcare data management', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Biomedical Science', 'Study human biology and disease mechanisms', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Health Administration', 'Learn healthcare management and policy', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Health Education', 'Study health promotion and education strategies', 5, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));


-- Courses Inserts for Department of Technology (department_id = 6):

INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Computing', 'Study computing fundamentals and applications', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Software Engineering', 'Learn software design and development lifecycle', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Information Systems', 'Study business information management', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Computer Networking', 'Learn network design and infrastructure', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Cybersecurity', 'Study information security and threat prevention', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Data Science', 'Learn data analysis and machine learning', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Artificial Intelligence', 'Study AI algorithms and intelligent systems', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Web Development', 'Learn website and web application development', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Mobile App Development', 'Study mobile platform application creation', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Cloud Computing', 'Learn cloud infrastructure and services', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Internet of Things', 'Study connected device networks and sensors', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Game Development', 'Learn video game design and programming', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Augmented Reality', 'Study AR technology and application development', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Virtual Reality', 'Learn VR environment creation and immersion', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BSc (Hons) Blockchain Technology', 'Study distributed ledger and cryptocurrency systems', 6, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));


-- Courses Inserts for Department of Education (department_id = 7):

INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Education', 'Study teaching methods and learning theory', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Early Childhood Studies', 'Learn child development and early education', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Special Education', 'Study inclusive education and special needs', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Educational Psychology', 'Learn psychological principles in education', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Curriculum and Instruction', 'Study curriculum design and teaching methods', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Educational Leadership', 'Learn school management and administration', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Adult Education', 'Study adult learning and continuing education', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Higher Education', 'Learn university teaching and academic administration', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Distance Learning', 'Study online education and remote instruction', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Educational Technology', 'Learn technology integration in teaching', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Language Education', 'Study language acquisition and teaching', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Mathematics Education', 'Learn math teaching methods and curriculum', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Science Education', 'Study science teaching methods and lab instruction', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Arts Education', 'Learn art and music teaching methods', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
INSERT INTO courses (course_title, course_description, department_id, award_map) VALUES ('BA (Hons) Physical Education', 'Study sports instruction and health education', 7, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));
-- Modules Inserts:

INSERT INTO modules (module_id, module_description, award_map)
VALUES (0001, 'SE Course Timetabling Bridge', LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));

INSERT INTO modules (module_id, module_description, award_map)
VALUES (2087, 'Data Structures and Algorithms', LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));

INSERT INTO modules (module_id, module_description, award_map)
VALUES (2088, 'Group Project', LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));

INSERT INTO modules (module_id, module_description, award_map)
VALUES (2091, 'Mobile Application Development', LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/image-test.png'));



-- Staff Inserts:

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99100012, 'Simon', '', 'White', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'CL/ML/PT', 'C2004/C3004', 'Software Engineering', 00001226, 1);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99100101, 'David', '', 'Adams', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'C2001/C3001', 'Software Engineering', 00001226, 2);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99100190, 'Daniel', '', 'Barnes', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'C1005', 'Software Engineering', 00001226, 3);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99100279, 'Andrew', '', 'Fletcher', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'C2003/C3002', 'Software Engineering', 00001226, 4);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99100368, 'Ryan', '', 'Hickman', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'C3003', 'Software Engineering', 00001226, 5);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99100457, 'Paul', '', 'Jones', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'C3005', 'Software Engineering', 00001226, 6);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99100546, 'Matthew', '', 'Smith', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'C2006', 'Software Engineering', 00001226, 7);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99100635, 'Mark', '', 'Neal', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'C2005', 'Software Engineering', 00001226, 8);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99100724, 'Julie', '', 'Neech', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'C1006', 'Software Engineering', 00001226, 9);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99100813, 'Daniel', '', 'Osborne', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'C1002', 'Software Engineering', 00001226, 10);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99100902, 'Thomas', '', 'Redmond', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'C1003', 'Software Engineering', 00001226, 11);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (99101080, 'Raja', '', 'Patel', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'C1004/C1001', 'Software Engineering', 00001226, 12);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, specialism, emergency_contact, record_status)
VALUES (00001226, 'Adam', '', 'Blake', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'AD', 'Administration', 00001226, 13);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (00002226, 'Raj', '', 'Singh', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'ML/PT', 'PLACEHOLDER', 'PLACEHOLDER', 00001226, 14);

INSERT INTO staff (staff_id, first_name, middle_name, surname, current_address, email, phone_number, role, mod_leader, specialism, emergency_contact, record_status)
VALUES (00003226, 'Test', '', 'Staff', 'placeholderAddress', 'placeholder@gmail.com', '+44 01234', 'AD', 'PLACEHOLDER', 'PLACEHOLDER', 00001226, 18);

-- Student Inserts:

INSERT INTO students (student_id, first_name, middle_name, surname, year_of_study, current_address, home_address, phone_number, email, offer_letter, emergency_contact, record_status, course_id)
VALUES (00001226, 'Mark', '', 'Williams', 3, 'placeholderAddress', '', '+44 01234', 'placeholder@gmail.com', LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/document-test.docx'), 00001226, 16, 0001);

INSERT INTO students (student_id, first_name, middle_name, surname, year_of_study, current_address, home_address, phone_number, email, offer_letter, emergency_contact, record_status, course_id)
VALUES (00002226, 'Test', '', 'Student', 2, 'placeholderAddress', '', '+44 01234', 'placeholder@gmail.com', LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/document-test.docx'), 00001226, 17, 0001);

-- Assignment Inserts:

INSERT INTO assignments (assignment_brief, pass_grade, total_marks, examiner)
VALUES (LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/document-test.docx'), 40.00, 100.00, 00002226);

-- Ticket Inserts:

INSERT INTO tickets (problem, solved_bool, student_id, admin_id)
VALUES ('This problem should be unsolved', FALSE, 00001226, 00001226);

INSERT INTO tickets (problem, solved_bool, student_id, admin_id)
VALUES ('This problem should be solved', TRUE, 00002226, 00001226);

-- Chat Log Inserts:

INSERT INTO chat_logs(message, staff_id)
VALUES ('This is a test message', 00003226);

-- Timetable Inserts:

INSERT INTO timetable (room_number, start_time, end_time, description, reg_code, module_code)
VALUES ('LH311', '2026-03-28 12:00:00', '2026-03-28 15:00:00', 'Group Project Demo', 123456, 2088);

INSERT INTO timetable (room_number, start_time, end_time, description, module_code)
VALUES ('Main Hall', '2026-05-18 9:00:00', '2026-05-18 11:00:00', 'Graduations', 2087);

INSERT INTO timetable (room_number, start_time, end_time, description, module_code)
VALUES ('Waterside Bar', '2026-04-24 9:00:00', '2026-04-24 12:00:00', 'PT Meeting', 0001);


-- Personal Tutorial Inserts:

INSERT INTO personal_tutorials (student_id, tutor_id, complete_bool, timetable_slot, documentation)
VALUES (00002226, 00003226, TRUE, 0003, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/document-test.docx'));

-- Attendance Inserts:

INSERT INTO attendance (attendance_bool, late_log, student_id, timetable_slot)
VALUES (FALSE, TRUE, 00002226, 00001);

-- Course Module Inserts:

INSERT INTO course_modules (course_id, module_id)
VALUES (0001, 2087);

INSERT INTO course_modules (course_id, module_id)
VALUES (0001, 2088);

INSERT INTO course_modules (course_id, module_id)
VALUES (0001, 2091);

-- Module Assignment Inserts:

INSERT INTO module_assignments(module_id, assignment_id, deadline)
VALUES (2087, 0001, '2026-05-22 11:59:59');

-- Student Assignment Inserts:

INSERT INTO student_assignments(student_id, assignment_id, submission, grade, date_of_return)
VALUES (00002226, 0001, LOAD_FILE('C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/document-test.docx'), 75.00, '2026-06-22 11:59:59');

