src = open("build_adm.py", encoding="utf-8").read()
exec(src.split("D = {")[0])
exec("def li" + src.split("def li")[1].split("sql = []")[0])

D = {
87: dict(intro="Qurtuba University admits students on merit, decided by its Admission Committee, and requires an admission test and interview.",
 boxes=[("Levels", "Bachelor, Master (MS/MPhil), PhD"), ("Bachelor and Master", "Minimum 2nd division"), ("MS/MPhil", "Minimum 50% marks (2.50 CGPA of 4.0), except MPhil English"), ("PhD", "Minimum 3.0 CGPA")],
 secs=[("Documents required", ["Attested photocopies of certificates and detailed marks", "Character certificate from the last institution", "Three passport-size photographs", "Original migration certificate", "National Identity Card photocopies", "NOC from the employer, if employed", "NOC from designated government agencies, for foreign nationals"])]),
1345: dict(intro="Ganj Shakar University offers bachelor's degrees (BS, BA) and doctoral programmes (DPT, Pharm-D). Most programmes select through the university entry test.",
 boxes=[("Selection", "University entry test; LAT for Law; MCAT or NTS options in some programmes"), ("Pre-Medical programmes", "FSc Pre-Medical or A-Level; 45-60% by programme"), ("Computer Science and AI", "Intermediate with Mathematics; minimum 50%"), ("Law (LLB)", "FA, FSc or A-Level; second division; LAT 50%")],
 secs=[("Eligibility by programme", ["Radiography, DPT, Nutrition, Pharmacy: FSc Pre-Medical (Biology, Physics, Chemistry) or equivalent", "Business (BBA, FinTech): FA, FSc, ICom or equivalent; second division", "Agriculture Sciences: HSSC Pre-Medical or Pre-Engineering with at least 50%", "Pre-Medical students lacking Mathematics take deficiency courses for Computer Science"]), ("Good to know", ["Merit scholarships apply to tuition fees only, not registration fees"])]),
1543: dict(intro="DHA Suffa University sets eligibility by programme group and selects through an admission test taken on campus or online, followed by interviews.",
 boxes=[("Engineering (BE)", "Minimum 60% in HSSC, O/A Level or DAE"), ("Computer Science programmes", "Minimum 50% in HSSC or O/A Level with Mathematics"), ("Management Sciences", "Minimum 50% in HSC or O/A Level"), ("Application fee", "Rs. 1,500 on campus; Rs. 2,500 online (undergraduate)")],
 secs=[("Postgraduate entry", ["Master's: 16 years of education with GRE/HAT General at least 50%", "PhD: Master's (18 years) with minimum 3.0 CGPA and GRE/HAT at least 60%"]), ("Good to know", ["Original documents are required at the interview", "Some online-test candidates are called for a physical interview"])]),
1547: dict(intro="Salim Habib University admits students through the SHU Aptitude Test and a departmental interview.",
 boxes=[("Aptitude test", "English, Analytical Skills, General Knowledge / subject content"), ("Test duration", "60 minutes MCQs + 30 minutes essay"), ("General programmes", "HSC or O/A Level, minimum 45%"), ("Pharm-D", "HSC Pre-Medical or O/A Level, minimum 60%")],
 secs=[("Levels", ["Associate Degree", "Bachelor's (BS/BE)", "Master's (MS/ME/MPhil)", "PhD", "Certificate and diploma programmes (4 months to 1 year)"]), ("Good to know", ["IT and Engineering programmes need HSC Pre-Engineering with Mathematics, 50-60%", "Transfer candidates must complete at least 50% of degree credits at SHU", "Bring the admit card and original CNIC"])]),
1550: dict(intro="Malir University of Science and Technology offers four BS programmes. Every applicant must pass an aptitude test and a panel interview.",
 boxes=[("Programmes", "BS Psychology, Public Health, Medical Laboratory Technology, Nursing (Generic)"), ("Minimum marks", "50% in Intermediate"), ("Age", "17-35 years"), ("Selection", "Aptitude test and panel interview")],
 secs=[("Eligibility", ["BS Psychology: Intermediate in any discipline", "BS Public Health and BS Medical Laboratory Technology: HSSC Pre-Medical or equivalent", "BS Nursing (Generic): HSSC Pre-Medical with Biology"]), ("Documents (attested photocopies)", ["Matric marks sheet and certificate", "Intermediate marks sheet", "CNIC and B-Form or father's CNIC", "Domicile and PRC (Form C)", "Six unstamped photographs"]), ("Good to know", ["Processing charge Rs. 2,500", "The university states a 100% tuition scholarship for all students; institutional service charges still apply"])]),
1552: dict(intro="Aror University admits undergraduate students to regular morning programmes, using an entry test and interview.",
 boxes=[("Entry test", "100 questions on the intermediate curriculum; no negative marking"), ("Merit weightage", "Matric 10% + Intermediate 20% + Test 60% + Interview 10%"), ("Test processing fee", "Rs. 1,500, non-refundable")],
 secs=[("Good to know", ["Original documents are mandatory at the interview", "CNIC or B-Form is needed for the entry test", "Admitted students may not work or enrol elsewhere at the same time"])]),
1539: dict(intro="DUET offers BE and BS degrees plus MS and PhD programmes in engineering, architecture, computing and applied sciences. Admission uses a test or interview where required and a merit list.",
 boxes=[("Levels", "BE, BS, MS, PhD"), ("Selection", "Admission test/interview where required + merit list"), ("Scholarships", "Need-based, merit and departmental assistance")],
 secs=[("Documents", ["Matriculation and Intermediate marksheets and certificates", "Postgraduate transcripts and degree (MS/PhD applicants)", "CNIC or B-Form and domicile certificate", "Passport-size photographs", "Application fee deposit slip"])]),
1544: dict(intro="Nazeer Hussain University offers bachelor's (BS, B.Arch, BBA), MBA and associate degree programmes, and selects on an NHU aptitude test plus previous academic record.",
 boxes=[("Selection", "NHU aptitude test + previous academic record"), ("Levels", "BS, B.Arch, BBA, MBA (1.5 and 2 years), Associate Degree"), ("Scholarships", "Need-cum-merit scholarships and bursaries")],
 secs=[("Good to know", ["Provisional admission needs a pass in all subjects of the last examination", "Result-awaiting candidates submit an affidavit on Rs. 100 stamp paper", "Also offers short courses (NAVPD, CPD)"])]),
1525: dict(intro="King Edward Medical University offers undergraduate and postgraduate medical programmes. MBBS and BDS admissions use the MDCAT.",
 boxes=[("MBBS / BDS", "MDCAT"), ("Undergraduate", "MBBS, BDS, Allied Health Sciences, DPT, Allied Vision Sciences, Post RN BSN"), ("Postgraduate", "MD, MS, MDS, MPhil, MPH, diplomas, certificates, PhD")],
 secs=[]),
1541: dict(intro="Muhammad Ali Jinnah University offers four-year undergraduate degrees, two-year degrees after 14 years of education, master's and PhD programmes, and reports that 30% of students receive financial assistance.",
 boxes=[("Levels", "4-year undergraduate, 2-year (after 14 years), Master's, PhD"), ("Financial assistance", "30% of students")],
 secs=[]),
1347: dict(intro="Pakistan Global Institute offers BS in AI, BS in Computer Science, BBA and BS in Business Administration, plus ESL certificate and diploma programmes.",
 boxes=[("Application", "Video submission; possible online interview"), ("Scholarships", "Scholarships and financial aid for deserving students")],
 secs=[]),
1535: dict(intro="TIMES University offers associate degrees, undergraduate programmes (Pharm-D, DPT, LLB, BBA, BS) and postgraduate programmes (MBA, LLM, MS, MPhil, PhD).",
 boxes=[("Levels", "AD, Undergraduate, Postgraduate"), ("Scholarship", "TIMES Talent Scholarship")],
 secs=[]),
1331: dict(intro="The University of Layyah offers BS (Hons) 4-year, Post-ADP 2-year, LAD diploma and B.Ed (1.5 year) programmes.",
 boxes=[("Programmes", "BS (Hons), Post-ADP, LAD diploma, B.Ed (1.5)")],
 secs=[]),
54: dict(intro="IBA Karachi admits undergraduate, graduate, postgraduate, postgraduate diploma and PhD applicants through its admissions site.",
 boxes=[("Levels", "Undergraduate, Graduate, Postgraduate, PG Diploma, PhD")],
 secs=[]),
59: dict(intro="KASBIT offers a two-year associate degree, four-year undergraduate degrees, MBA and PhD programmes.",
 boxes=[("Levels", "Associate Degree (2 years), Undergraduate (4 years), MBA, PhD"), ("Scholarships", "Academic scholarship")],
 secs=[]),
}

sql = []
for k, v in D.items():
    full = "<p>%s</p>%s" % (html.escape(v["intro"], quote=False), tail(v))
    sql.append("UPDATE data_education_listings SET tab_value_1='%s' WHERE listing_id=%d AND (tab_value_1 IS NULL OR tab_value_1='');" % (q(full), k))
    sql.append("UPDATE data_education_listings SET tab_value_1=CONCAT('<p>', tab_value_1, '</p>', '%s') WHERE listing_id=%d AND tab_value_1 NOT LIKE '%%adm-grid%%';" % (q(tail(v)), k))
open("admissions_final3.sql", "w", encoding="utf-8").write("\n".join(sql) + "\n")
print(len(D), "universities")
