# 🎓 Placement Portal

A **web-based Placement Management System** designed to streamline the campus recruitment process for **students**, **companies**, and **administrators**.  
This portal helps automate and manage student registrations, job postings, eligibility checks, and application tracking — all in one unified platform.

---

## 🚀 Features

- 🧑‍🎓 **Student Dashboard** – Create and update academic profiles (SSC, HSC, UG, PG) and apply for eligible job drives.  
- 🏢 **Company Dashboard** – Post jobs, define eligibility criteria, and review student applications.  
- 🧠 **Eligibility Checker** – Automatically verifies student eligibility based on academic scores and course qualification.  
- 🧾 **Application Tracking** – Students can track their applied jobs; companies can manage applicants easily.  
- 🔐 **Role-Based Authentication** – Secure login system for students, companies, and admins.  
- 📊 **Admin Panel** – Manage users, companies, and job posts with ease.

---

## 🛠️ Tech Stack

| Layer       | Technology Used                |
|--------------|-------------------------------|
| **Frontend** | HTML, CSS, JavaScript, Bootstrap |
| **Backend**  | PHP (Core PHP / MySQLi)        |
| **Database** | MySQL                          |
| **Server**   | XAMPP / Apache                 |

---

## ⚙️ How It Works

1. **Student Registration** → Students register and add their academic details (SSC, HSC, UG, PG).  
2. **Company Job Posting** → Companies post job openings with qualification and minimum percentage criteria.  
3. **Eligibility Check** → System validates student marks and qualification automatically.  
4. **Application Submission** → Eligible students can apply and track their applications.  
5. **Admin Supervision** → Admin manages users, companies, and drives.

---

## 💡 Key Highlights

- Automated eligibility calculation (average of SSC, HSC, UG, PG).  
- Prevents duplicate job applications.  
- Responsive and user-friendly UI.  
- Easy to customize for any college or institution.  

---

## 🧩 Future Enhancements

- Resume upload and automatic screening.  
- Real-time email/SMS notifications.  
- Company feedback and analytics dashboard.  
- Integration with college ERP systems.  

---


---

## 🧠 Installation Guide

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/placement-portal.git
   
2. Move to project folder
   cd placement-portal
   
4. Import the database

Open phpMyAdmin.

Create a database named placement_portal.

Import the provided placement_portal.sql file.

4. Update database credentials

Open db.php and update:
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement_portal";

5. Run the project

Start Apache and MySQL in XAMPP.

Visit http://localhost/placement-portal/ in your browser.


