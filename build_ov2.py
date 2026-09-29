import html

def li(xs):
    return "<ul>" + "".join("<li>%s</li>" % html.escape(x, quote=False) for x in xs) + "</ul>"

def q(x):
    return x.replace("\\", "\\\\").replace("'", "''")

O = {
44: dict(n="University of South Asia", intro="The University of South Asia is a private university in Lahore with campuses at Lahore Cantt and Raiwind Road. It offers associate, bachelor's, MPhil/master's and doctorate programmes, plus diplomas and short courses across nine faculties.",
  facts=["Type: Private university", "Campuses: Lahore Cantt and Raiwind Road", "Programme Finder tool matches applicants to programmes by previous qualification, marks and subject group"],
  progs=["Faculty of Computer Science and IT", "Faculty of Management Sciences", "Faculty of Allied Health Sciences", "Faculty of Sciences", "Faculty of Art and Fashion Design", "Faculty of Law", "Faculty of Humanities and Social Sciences", "Faculty of Commerce", "Faculty of Culinary Arts"]),
51: dict(n="Indus University Karachi", intro="Indus University (Indus Institute of Higher Education) is a private university in Karachi with campuses at Gulshan-e-Iqbal and North Karachi. It has five faculties and 300+ instructors, with ACCA, Pearson BTEC HND and LRN Foundation Year as transnational programmes.",
  facts=["Type: Private university", "Campuses: Gulshan-e-Iqbal and North Karachi", "Faculty: 300+ instructors; 20,000+ alumni", "Contact: admission@indus.edu.pk"],
  progs=["Faculty of Management Sciences (Business Administration)", "Faculty of Health and Medical Science (Allied Health Sciences)", "Faculty of Communication and Design (Media Studies and Design)", "Faculty of Engineering, Science and Technology (Computing, Electrical Engineering)", "Faculty of Agricultural and Social Sciences", "Postgraduate: MS Media Studies, MS Computer Science, MS Engineering, MBA"]),
64: dict(n="PIMSAT Karachi", intro="The Preston Institute of Management Sciences and Technology (PIMSAT) is a private institution in Karachi chartered by the Government of Sindh. It is recognised by the HEC and the Pakistan Engineering Council, and offers engineering, business, DAE and diploma programmes.",
  facts=["Type: Private, chartered by the Government of Sindh", "Recognised by HEC and PEC; QAHE accredited; ACBSP member"],
  progs=["B.E. Electrical Engineering", "B.E. Civil Engineering", "BBA and MBA", "DAE programmes", "SINO-PAK Dual Diploma Programme", "Certificate courses and CCTE Diploma"]),
100: dict(n="Government Sadiq College Women University", intro="The Government Sadiq College Women University (GSCWU) in Bahawalpur is a public institution whose site dates it to 1944. It has four faculties and 14 departments, offering BS, B.Ed, MS and PhD programmes. Online applications are made through its admissions portal and selection is on merit.",
  facts=["Established: 1944 (as stated by the university)", "Type: Public university for women, Bahawalpur", "GAT is required for MS and PhD programmes", "Selection: merit lists"],
  progs=["Faculty of Science", "Faculty of Business and Management Sciences", "Faculty of Arts", "Faculty of Education", "Departments include Chemistry, Mathematics, Botany, Physics, Zoology, Food Science and Technology, Biotechnology, Computer Science, English, Urdu, Applied Psychology, Islamic Studies and Education"]),
1306: dict(n="Kalam Bibi International Women Institute", intro="Kalam Bibi International Women Institute (KIWI) is a public, federally chartered women-only institute in Bannu, Khyber Pakhtunkhwa, established in 2023. It has three faculties, 11 departments and 16 active programmes, taught by female faculty.",
  facts=["Established: 2023", "Type: Public, federally chartered, women only", "Faculty members: 24; active programmes: 16", "Selection: merit lists"],
  progs=["Faculty of Allied Health Sciences and Nursing", "Faculty of Science and Technology", "Faculty of Social Sciences and Humanities"]),
1308: dict(n="Thal University Bhakkar", intro="Thal University is a public-sector, HEC-recognised university in Bhakkar, Punjab, established in 2022. It has five faculties, 20+ departments and 4,500+ students, with a library, sports facilities, student housing and an auditorium.",
  facts=["Established: 2022", "Type: Public-sector university", "Students: 4,500+", "Applications through admissions.tu.edu.pk"],
  progs=["Faculty of Computing", "Faculty of Sciences", "Faculty of Management Sciences", "Faculty of Arts and Humanities", "Faculty of Social Sciences"]),
1309: dict(n="Al-Karam International Institute", intro="Al-Karam International Institute in Bhera is a federally chartered institute recognised by the HEC and the Pakistan Bar Council. It offers four-year LLB, BS English, BS Arabic and BS Islamic Studies programmes, with BS Computer Science in process.",
  facts=["Federally chartered", "Recognised by HEC and PBC; law programmes PBC accredited"],
  progs=["Faculty of Social Sciences: Law, Shariah and Law, English, Arabic, Islamic Studies", "Faculty of Computer Science and IT: Computer Science, Information Technology, Software Engineering", "LLB (4 years) and LLB Shariah and Law (4 years)", "BS English, BS Arabic, BS Islamic Studies (4 years each)"]),
1311: dict(n="AJK University of Bhimber", intro="The Azad Jammu and Kashmir University of Bhimber is a public university established by the Government of AJK, with 851 students and 19 programmes. Its Honhaar Scholarship is open to students with a valid AJK domicile and a monthly family income below Rs. 350,000.",
  facts=["Type: Public university (Government of AJK)", "Students: 851", "Programmes: 19", "Honhaar Scholarship: AJK domicile and family income below Rs. 350,000 per month"],
  progs=["BS Botany, English, Economics, Education, Animal Sciences", "BS Computer Science, IT, Artificial Intelligence", "Doctor of Veterinary Medicine and Doctor of Physical Therapy", "BS Medical Laboratory Technology, BS Human Nutrition and Dietetics, BBA", "MPhil Botany, B.Ed (1.5 year), Livestock Assistant Diploma"]),
1335: dict(n="Ibn-e-Sina University Mirpurkhas", intro="Ibn-e-Sina University is a private institution in Mirpurkhas, Sindh, dating to 1999, on Hyderabad Road (6 km from Zero Point). It is recognised by PMDC, HEC, WHO and CPSP and is affiliated with LUMHS.",
  facts=["Established: 1999", "Type: Private institution", "Recognised by PMDC, WHO, HEC and CPSP; LUMHS affiliated"],
  progs=["Muhammad Medical College (MBBS, 5 years)", "Muhammad Dental College (BDS)", "Muhammad Institute of Physiotherapy and Rehabilitation Sciences (DPT)", "Muhammad College of Nursing (BS Nursing)", "Muhammad Institute of Science and Technology (BBA)", "Postgraduate: FCPS/MCPS, MPhil and PhD"]),
1337: dict(n="Ali Bin Usman Institute", intro="Ali Bin Usman Institute in Multan is an HEC-recognised degree-awarding institute chartered by the Government of the Punjab under the Ali Bin Usman Institute, Multan Act 2025. It offers BBA, BS Computer Science and LLB.",
  facts=["Established under the 2025 Act", "Recognised by the HEC", "Location: Main Road, Peer Khursheed Colony, Multan"],
  progs=["Bachelor of Business Administration (BBA)", "BS Computer Science", "Bachelor of Laws (LLB)"]),
1341: dict(n="Baba Guru Nanak University", intro="Baba Guru Nanak University (BGNU) in Nankana Sahib has 23+ programmes, 3,000+ students and 100+ faculty members across five faculties. Applications are made through admissions.bgnu.edu.pk.",
  facts=["Location: Nankana Sahib (Adam Pura)", "Students: 3,000+; faculty: 100+", "Programmes: 23+", "Contact: info@bgnu.edu.pk"],
  progs=["Natural Sciences and Technology", "Social and Behavioral Sciences", "Management Sciences", "Languages and Liberal Arts", "Theology and Religion", "Programmes include BS Computer Science, Data Science, AI, Psychology, Accounting and Finance, BBA, BFA, Punjabi Language and Literature"]),
1352: dict(n="Grand Asian University Sialkot", intro="Grand Asian University Sialkot (GAUS) is a private chartered university established in 2021 under an Act of that year. It has about 2,000 students on a 10-acre campus and 11 faculties, offering ADP, bachelor's, MPhil/MS and PhD programmes.",
  facts=["Established: 2021", "Type: Private chartered university", "Campus: 10 acres", "Students: about 2,000"],
  progs=["Faculty of Sciences", "Faculty of Management Science", "Faculty of Computing and Information Technology", "Faculty of Food and Agricultural Sciences", "Faculty of Allied Health Sciences", "Faculty of Social Sciences", "Faculty of Languages and Literature", "Faculty of Arts, Design and Architecture", "Faculty of Engineering and Technology", "Faculty of Law", "Faculty of Pharmacy"]),
1527: dict(n="NUR International University", intro="NUR International University (NIU) is a private university 17 km down Raiwind Road, Lahore. It offers health, food, nutrition, clinical psychology, management and other programmes across five faculties, and scholarships for needy and meritorious students.",
  facts=["Type: Private university", "Location: 17 km Raiwind Road, Lahore", "Admission form is online; scholarships for needy and meritorious students"],
  progs=["Faculty of Applied Sciences", "Faculty of Nursing and Allied Health Sciences", "Faculty of Arts, Humanities and Social Sciences", "Faculty of Management Sciences", "Faculty of Basic Sciences", "Programmes include DPT, BS Nursing, BS Medical Lab Technology, BS Optometry, BS Clinical Psychology, BBA and MBA"]),
1530: dict(n="Green International University", intro="Green International University (GIU) is a private university at Bhobtian Avenue, 9 km Raiwind Road, Lahore. It offers undergraduate, graduate and postgraduate programmes and applications are made online at admission.giu.edu.pk. It reports WURI top rankings for entrepreneurial culture and student support.",
  facts=["Type: Private university", "Location: Bhobtian Avenue, 9 km Raiwind Road, Lahore", "WURI rankings: #1 for Entrepreneurial Culture and Ecosystem; top 3 for Student Support and Engagement"],
  progs=["Undergraduate, graduate and postgraduate programmes"]),
1538: dict(n="Al-Qadir University", intro="Al-Qadir University is a private university run by a project trust at Sohawa, District Jhelum, about 80 km from Islamabad. It offers six four-year BS programmes.",
  facts=["Type: Private (project trust)", "Location: Sohawa, District Jhelum", "Application: confirm eligibility, apply online, accept the provisional offer and deposit fees"],
  progs=["BS Computer Science (50% in Pre-Engineering/ICS or equivalent)", "BS Management Sciences (45% in Intermediate or equivalent)", "BS Islamic Studies (100% tuition waiver for merit-admitted candidates)", "BS Psychology", "BS English", "BS International Relations"]),
1548: dict(n="Sohail University", intro="Sohail University is a private university in Karachi, established in 2018 and growing out of Jinnah Medical and Dental College (1998-99) and Jinnah College of Nursing (2009). It offers MBBS, BDS, nursing, BBA and postgraduate programmes.",
  facts=["Established: 2018 (university status)", "Type: Private university", "Contact: admissions@sohailuniversity.edu.pk"],
  progs=["Faculty of Health Sciences", "Faculty of Basic and Applied Sciences", "Faculty of Social Sciences", "Faculty of Management and Information Sciences", "Directorate of Postgraduate Studies and Research"]),
1549: dict(n="Millennium Institute of Technology and Entrepreneurship", intro="The Millennium Institute of Technology and Entrepreneurship (MiTE) is a private institution at Sector 47, Cantonment Board Korangi Creek, Karachi. It is HEC recognised and approved by the Government of Sindh, and its BS Computer Science is NCEAC approved.",
  facts=["Type: Private institution", "Location: Sector 47, Korangi Creek, Karachi", "Transnational programmes: University of Hertfordshire LLB and ACCA (via TMUC)"],
  progs=["Faculty of Business and Management Science", "Faculty of Engineering and Computer Science", "Faculty of Arts and Design", "Department of Open and Distance Learning", "BBA, BS Computer Science, BS Accounting and Finance, BS Fashion Design, ADP, MS Computer Science"]),
1551: dict(n="Shaheed Allah Bux Soomro University of Art, Design and Heritage", intro="Shaheed Allah Bux Soomro University of Art, Design and Heritage (SABSU) in Jamshoro, Sindh dates to 1990 per its site. It has 620+ enrolled students and 1,670+ graduates, and admission requires a pre-admission test.",
  facts=["Established: 1990 (as stated by the university)", "Students: 620+; graduates: 1,670+", "Pre-admission test required", "Contact: info@sabsu.edu.pk"],
  progs=["Faculty of Visual Arts", "Faculty of Architecture", "Bachelor of Architecture, Interior Design, Fine Arts, Communication Design, Fashion Design, Textile Design"]),
}

sql = []
for k, v in O.items():
    n = v["n"]
    d = "<p>%s</p><h3>Key Facts about %s</h3>%s<h3>Faculties and Programmes at %s</h3>%s" % (html.escape(v["intro"], quote=False), n, li(v["facts"]), n, li(v["progs"]))
    sql.append("UPDATE data_education_listings SET listing_detail='%s' WHERE listing_id=%d AND CHAR_LENGTH(IFNULL(listing_detail,''))<50;" % (q(d), k))
open("overview_final2.sql", "w", encoding="utf-8").write("\n".join(sql) + "\n")
print(len(O), "overviews")
