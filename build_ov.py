import html

def li(xs):
    return "<ul>" + "".join("<li>%s</li>" % html.escape(x, quote=False) for x in xs) + "</ul>"

D = {
1550: dict(n="Malir University of Science and Technology", intro="Malir University of Science and Technology is a Karachi-area university recognised by the Higher Education Commission. Its site states it was established in 2017, offers undergraduate programmes in health and clinical sciences, and provides free-of-cost education to students. Chancellor: Prof. Dr. S. Tipu Sultan.",
  facts=["Recognised by the Higher Education Commission", "Established: 2017 (as stated by the university)", "Education described as free of cost", "Chancellor: Prof. Dr. S. Tipu Sultan"],
  progs=["BS Psychology", "BS Public Health", "BS Medical Laboratory Technology", "BS Nursing (Generic)"]),
1552: dict(n="Aror University of Art, Architecture, Design and Heritage", intro="Aror University of Art, Architecture, Design and Heritage is located at the Rohri Bypass, Sukkur, Sindh, and was established in 2020. It runs six faculties and is known for its Open Air Museum, an Arts and Crafts Gallery and what it describes as Pakistan's first wax sculpture exhibit.",
  facts=["Established: 2020", "Location: Rohri Bypass, Sukkur, Sindh", "Open Air Museum and Arts and Crafts Gallery on campus"],
  progs=["Faculty of Architecture, Sciences, Engineering and Town Planning", "Faculty of Fine Art", "Faculty of Design", "Faculty of Heritage", "Faculty of Emerging Sciences and Technology", "Allied Faculty", "Programmes include Bachelor of Architecture, BS Civil Engineering, BS Digital Art, BS Textile Design, BS Fashion Design, BS Archaeology, BS Tourism and Hospitality, and AI, Multimedia and Gaming, Cybersecurity"]),
87: dict(n="Qurtuba University", intro="Qurtuba University is a private university with its main campus in Dera Ismail Khan and a campus in Hayatabad, Peshawar. It is placed in the W3 category by the HEC and offers undergraduate (BS) and postgraduate (MPhil, MS, MBA, PhD) programmes.",
  facts=["Type: Private university", "Campuses: Dera Ismail Khan (main) and Hayatabad, Peshawar", "HEC category: W3", "Quality Enhancement Cell (QEC) and Research Office (ORIC), with a research journal"],
  progs=["Physical and Numerical Sciences", "Chemical and Life Sciences", "Management Science", "Teachers' Education", "Political Science and International Relations", "Law", "Linguistics and Literature", "Islamic Studies", "Engineering", "Pharmacy"]),
1320: dict(n="Mukabbir University of Science and Technology", intro="Mukabbir University of Science and Technology is a private university in Gujrat that grew out of the Dar-e-Arqam Schools Gujrat (established 1999). It offers 30+ undergraduate, graduate and postgraduate degrees, with separate campuses for boys and girls on Bhimber Road near Airport Chowk.",
  facts=["Type: Private university", "Location: Bhimber Road, near Airport Chowk, Gujrat", "Origin: Dar-e-Arqam Schools Gujrat (1999)", "Separate campuses for boys and girls", "30+ degree programmes"],
  progs=["Faculty of Computer Science", "Faculty of Social Sciences", "Faculty of Commerce and Management Sciences", "Faculty of Health Sciences", "Faculty of Pharmaceutical Sciences", "Faculty of Sciences", "Programmes include BS Computer Science, Software Engineering, AI, Cyber Security, BBA, DPT, Pharm-D, and MS/MPhil/PhD"]),
1321: dict(n="University of Chenab", intro="The University of Chenab in Gujrat operates under the University of Chenab Act 2021. It offers associate degrees, undergraduate and postgraduate degrees, PhD programmes, postgraduate diplomas, short courses and HND international qualifications.",
  facts=["Established under the University of Chenab Act 2021", "Location: Gujrat, Punjab"],
  progs=["Associate degree programmes", "Undergraduate degrees", "Postgraduate and PhD programmes", "Postgraduate diplomas (PGD)", "Short courses and diploma programmes", "HND international qualifications"]),
1325: dict(n="University of Jhang", intro="The University of Jhang is a public university in Jhang, Punjab, established in 2015 and operating under the Punjab Higher Education Commission and the HEC. It has 18 departments and 40+ programmes, with about 3,800 students.",
  facts=["Established: 2015", "Type: Public university", "Students: about 3,800", "Faculty: about 80 full-time regular and 100 visiting members", "Programmes: 40+ (BS, MS, certificates and diplomas)"],
  progs=["Education", "Computer Science", "Mass Communication", "Islamic Studies", "Sociology", "Economics", "History and Pakistan Studies", "Craft and Textile", "Business and Management Sciences", "Mathematics", "English", "Urdu"]),
1326: dict(n="University of Kamalia", intro="The University of Kamalia is located on Rajana Road, Kamalia, Toba Tek Singh District, Punjab. It has four faculties and offers BS and BBA programmes across computing, sciences, business and arts.",
  facts=["Location: Rajana Road, Kamalia, Toba Tek Singh District, Punjab", "Four faculties"],
  progs=["Faculty of Computing, Engineering and Technology", "Faculty of Allied Health and Sciences", "Faculty of Business, Management and Economics", "Faculty of Arts, Social Sciences and Law", "Computing: BS Computer Science, Software Engineering, AI, IT, Cyber Security, Data Science", "Business: BBA, BS Business Analytics, Accounting and Finance, Islamic Banking and Finance, FinTech", "Arts and design: BS English, Applied Psychology, Textile Design, Fashion Design, Graphic Design"]),
1331: dict(n="University of Layyah", intro="The University of Layyah is a public university on Katchehry Road, Layyah, Punjab. It has five faculties, 22 departments and 59 undergraduate and postgraduate programmes for about 6,000 students, and works with the Punjab Higher Education Commission, the HEC and partner universities including UET Lahore and Universiti Kebangsaan Malaysia.",
  facts=["Type: Public university", "Students: 6,059", "Departments: 22; programmes: 59", "MOU partners: UET Lahore, Universiti Kebangsaan Malaysia, NAEC"],
  progs=["Faculty of Computing and Engineering", "Faculty of Veterinary and Animal Sciences", "Faculty of Agricultural Sciences and Technology", "Faculty of Management, Humanities and Social Sciences", "Faculty of Natural Sciences"]),
1333: dict(n="University of Mianwali", intro="The University of Mianwali is a public university on University Road, Mianwali, established in 2019. It offers bachelor's and master's programmes across two faculties, and has research facilities, a hostel, a health centre and access to the HEC Digital Library.",
  facts=["Established: 2019", "Type: Public university", "Facilities: research labs (spectrophotometers, HPLC, PCR), library, hostel, health centre"],
  progs=["Faculty of Sciences: Botany, Biotechnology, Chemistry, Computer Science and IT, Mathematics, Physics, Software Engineering, Statistics and Data Science, Zoology, Microbiology", "Faculty of Social Sciences and Humanities: Arabic and Islamic Studies, Business Administration, Commerce, Education, Economics, English, Psychology, Urdu, Political Science, International Relations"]),
1345: dict(n="Ganj Shakar University", intro="Ganj Shakar University is a private, HEC-recognised university established by the IBADAT Education Trust, 9 km on Sahiwal Road, Pakpattan. It is described as the first university in Pakpattan District and offers 8+ undergraduate degree programmes across five faculties.",
  facts=["Type: Private university (IBADAT Education Trust)", "Recognised by the Higher Education Commission", "Location: 9 km Sahiwal Road, Pakpattan", "Library of 15,000+ books, labs, Wi-Fi and sports facilities"],
  progs=["Faculty of Allied Health Sciences", "Faculty of Computer Science and Information Technology", "Faculty of Law", "Faculty of Pharmacy", "Faculty of Business Administration"]),
1347: dict(n="Pakistan Global Institute", intro="Pakistan Global Institute (PGI) is an HEC-recognised, federally chartered degree-awarding institute at Moza Bagha Sheikhan, Rawat, Rawalpindi. It describes itself as the first South Korean university in Pakistan, with South Korean academic partnerships.",
  facts=["Recognised by the HEC; federally chartered", "Location: Moza Bagha Sheikhan, Rawat, Rawalpindi", "South Korean academic partnerships"],
  progs=["BS Computer Science", "BS Artificial Intelligence", "BS Business Analytics", "BBA", "ESL Certificate and Diploma"]),
1356: dict(n="University of Veterinary and Animal Sciences Swat", intro="The University of Veterinary and Animal Sciences Swat is described as the first veterinary university in the Khyber Pakhtunkhwa region and a multidisciplinary university. It has four faculties and 14 departments and offers BS, DVM and diploma programmes.",
  facts=["Location: Swat, Khyber Pakhtunkhwa", "First veterinary university in the region (as stated by the university)", "14 departments"],
  progs=["Faculty of Veterinary Sciences", "Faculty of Allied Health Sciences", "Faculty of Sciences", "Faculty of Arts and Social Sciences", "Degrees: BS and DVM; Diploma in Veterinary Sciences"]),
1358: dict(n="University of Modern Sciences Tando Muhammad Khan", intro="The University of Modern Sciences (TUMS) is a private university on Badin Road, Tando Muhammad Khan, Sindh. It has four faculties and offers five-year, four-year and diploma programmes, with affiliated Indus colleges of medicine, nursing, pharmacy and physical therapy.",
  facts=["Type: Private university", "Location: Badin Road, Tando Muhammad Khan, Sindh"],
  progs=["Faculty of Medicine and Sciences", "Faculty of Business and Management Sciences", "Faculty of Allied Health Sciences", "Faculty of Science, Technology and Humanities", "Indus Medical College, Indus College of Nursing, Indus College of Pharmacy, Indus College of Physical Therapy"]),
1506: dict(n="Muslim Youth University", intro="Muslim Youth University (MYU) is a federally chartered private university on Japan Road, Islamabad. It is recognised by the HEC and its engineering programmes are PEC accredited.",
  facts=["Type: Private, federally chartered", "Location: Japan Road, Islamabad", "Recognised by the HEC; PEC accredited", "Contact: admissions@myu.edu.pk"],
  progs=["Faculty of Allied Health Sciences", "Faculty of Basic and Applied Sciences", "Faculty of Engineering and Technology", "Faculty of Fashion Designing and Fine Arts", "Faculty of Social Sciences and Humanities", "Faculty of Management Sciences", "Faculty of Law", "Faculty of Pharmacy", "Institute of Islamic Studies and Sharia", "Programmes include BS/MS Computer Science, AI, Cyber Security, Civil and Electrical Engineering, MBA, BBA, DPT and PhD in Computer Science and International Relations"]),
1529: dict(n="Institute for Art and Culture", intro="The Institute for Art and Culture (IAC), Lahore, was established in 2018 and is a federally chartered, HEC-recognised institute. It has five schools and offers degree, associate degree, post-associate degree programmes and short courses.",
  facts=["Established: 2018", "Federally chartered and HEC recognised"],
  progs=["School of Architecture, Design and Urbanism", "School of Art", "School of Informatics and Robotics", "School of Digital and Cinematic Art", "School of Culture and Languages"]),
1535: dict(n="TIMES University Multan", intro="TIMES University is a private chartered university on the Northern Bypass, Multan. It has seven approved faculties and 14 departments, and offers 18 BS programmes, 7 associate degrees, 17 MS/MPhil programmes and 6 PhD programmes.",
  facts=["Type: Private chartered university", "Main campus: 4-KM Head Muhammad Wala Road, Northern Bypass, Multan", "Recognised by HEC, PNMC, PCP, PBC and AHPC"],
  progs=["Faculty of Law", "Faculty of Management Sciences", "Faculty of Medicine and Allied Health Sciences", "Faculty of Pharmaceutical Science", "Faculty of Social Sciences", "Faculty of Science and Technology"]),
1349: dict(n="University of Shangla", intro="The University of Shangla is a public-sector university at Main Lilownai Road, Alpuri, Shangla. It offers BS and MS programmes across five departments, has hostel facilities and multiple campuses, and reports research and IT rankings.",
  facts=["Type: Public-sector university", "Location: Main Lilownai Road, Alpuri, Shangla", "Hostel facilities and multiple campuses"],
  progs=["Allied Health Sciences", "Computer Science", "English", "Management Sciences", "Zoology"]),
}

def q(x):
    return x.replace("\\", "\\\\").replace("'", "''")

sql = []
for k, v in D.items():
    n = v["n"]
    d = "<p>%s</p><h3>Key Facts about %s</h3>%s<h3>Faculties and Programmes at %s</h3>%s" % (html.escape(v["intro"], quote=False), n, li(v["facts"]), n, li(v["progs"]))
    sql.append("UPDATE data_education_listings SET listing_detail='%s' WHERE listing_id=%d AND CHAR_LENGTH(IFNULL(listing_detail,''))<50;" % (q(d), k))
open("overview_final.sql", "w", encoding="utf-8").write("\n".join(sql) + "\n")
print(len(D), "overviews")
