src = open("build_adm.py", encoding="utf-8").read()
exec(src.split("D = {")[0])
exec("def li" + src.split("def li")[1].split("sql = []")[0])

D = {
5: dict(intro="BNU admits applicants to undergraduate and graduate programmes through an online application.",
 boxes=[("Levels", "Undergraduate and Graduate"), ("Processing fee", "Rs. 4,000"), ("Application", "Completed online form")],
 secs=[("Documents required", ["Completed online application form", "Four attested passport-size recent photographs", "Attested educational transcripts and degrees", "Attested copy of the applicant's and parent's National Identity Card (or B-Form if under 18)"])]),
13: dict(intro="Hajvery University offers undergraduate (ADP and Bachelor's), graduate (Master's, MBA, MS, MPhil) and doctoral programmes. Requirements vary by degree programme.",
 boxes=[("Levels", "ADP, Bachelor's, Master's, MPhil, PhD"), ("Requirements", "Vary by programme"), ("Scholarships", "Merit-based and others")],
 secs=[]),
25: dict(intro="PIEAS admits students to BS, MS and PhD programmes through an admission test, and runs need-based and merit-based scholarships.",
 boxes=[("Levels", "BS, MS, PhD"), ("Selection", "Admission test for BS, MS and PhD"), ("Scholarships", "Need and merit based")],
 secs=[("Support named on the admissions page", ["Need and merit based scholarships", "Laptop distribution programme", "PMFRS scholarship programme", "Funded studentships through NRPU", "Cash awards for students"])]),
35: dict(intro="UMT offers associate, post-associate, undergraduate (BS), graduate (MS), PhD and one-year programmes.",
 boxes=[("Levels", "Associate to PhD, plus one-year programmes"), ("Scholarships", "Rs. 16+ billion in scholarships"), ("Financial assistance", "1:3 ratio")],
 secs=[]),
40: dict(intro="UET Taxila admits undergraduate students on merit, based on the ECAT conducted by UET Lahore and the applicant's programme preferences.",
 boxes=[("Entry test", "ECAT (conducted by UET Lahore)"), ("Not required for", "BS Physics and Mathematics"), ("Processing fee", "Rs. 4,000"), ("Categories", "Open merit, S (partially subsidised), X (overseas Pakistani children)")],
 secs=[("Documents required", ["Bank challan receipt for university dues", "Medical certificate (Form F-V) signed by the District Medical Superintendent or equivalent", "Ten attested recent photographs", "Attested parent or guardian income certificate", "Original degrees, certificates and result cards (SSC, HSSC, BSc, GCE-A, Diploma)", "Original entry test marks sheet", "Original domicile certificate", "Attested CNIC or Form B copy", "Bio-Data Sheet (Form F-VI)", "Undertaking on Rs. 50 stamp paper (Form F-VII)", "Original NCC certificate, if applicable"])]),
70: dict(intro="The Textile Institute of Pakistan offers four-year bachelor's degrees and calculates merit from Intermediate marks, the entry test and an interview.",
 boxes=[("BS Sustainable Textile Science", "Minimum 45% in Intermediate"), ("All other programmes", "Minimum 50% in Intermediate"), ("Merit formula", "Intermediate/A-Level 20% + Entry test 50% + Interview 30%")],
 secs=[("Good to know", ["Intermediate from any discipline is accepted", "GCE A-Level holders need Mathematics, Chemistry and Physics with at least grade D or equivalent", "An IBCC equivalency certificate is required for international qualifications"])]),
71: dict(intro="University of East offers bachelor's programmes (BA, BCom, BEd, BBA, BS Computer Science, B-Tech) and master's programmes (MCom, MEd, MBA).",
 boxes=[("Bachelor's", "BA, BCom, BEd, BBA, BS Computer Science, B-Tech"), ("Master's", "MCom, MEd, MBA"), ("Provisional admission", "Last degree/result card, photo, ID card copy")],
 secs=[("Final admission documents (within 3 months)", ["Matric certificate", "Inter certificate", "Bachelor's and Master's degrees, as applicable", "Job certificate", "Migration certificate (if the degree is from outside Sindh)", "HEC/IBCC equivalence certificate, if applicable"])]),
95: dict(intro="Kinnaird College admits students at intermediate, undergraduate, graduate and doctoral levels. Doctoral applicants sit entrance tests.",
 boxes=[("Levels", "Intermediate, Undergraduate, Graduate, Doctoral"), ("Doctoral entry", "Minimum CGPA 3.00 in coursework"), ("Doctoral selection", "Entrance tests")],
 secs=[("Good to know", ["Doctoral applicants submit a statement of purpose", "The online application processing fee is paid through an Askari Bank challan form"])]),
1307: dict(intro="The University of Science and Technology Bannu offers BS, MS/MPhil and PhD programmes, along with BSc Engineering and BS Allied Health Sciences.",
 boxes=[("Processing fee", "Rs. 1,000"), ("Admission test fee", "Rs. 500 additional, where applicable"), ("Admission test", "Required for MS/MPhil, PhD and BSc Engineering")],
 secs=[("Good to know", ["Applicants with a valid GAT or Engineering Test score are exempt from the admission test", "Government employees need an NOC from their employer", "Programmes with fewer than 15 enrolled candidates may not be offered"])]),
1340: dict(intro="The University of Azad Jammu and Kashmir offers undergraduate and postgraduate programmes, with an entry test where applicable.",
 boxes=[("Application fee", "PKR 3,000 (+ PKR 1,000 per additional programme)"), ("Entry test fee", "PKR 1,000 (+ PKR 200 per additional programme)"), ("Fee payment", "At HBL branches"), ("Financial support", "Merit scholarship, tuition rebate, financial assistance")],
 secs=[]),
1503: dict(intro="CUST offers bachelor's (BS, BBA, LLB, Pharm.D), associate diploma, master's (MS, MBA, MPhil) and doctoral programmes, with an admission test and a published merit list.",
 boxes=[("Levels", "ADP, Bachelor's, Master's, MPhil, PhD"), ("Selection", "Admission test and merit list"), ("Engineering programmes", "FSc Pre-Medical and ICS (Physics, Maths, Computer) also eligible")],
 secs=[]),
1504: dict(intro="AIOU offers programmes from secondary school certificate to PhD, mainly through distance learning, with merit-based selection for higher programmes.",
 boxes=[("Levels", "Matric, Intermediate, Bachelor, B.Ed, Master/MPhil/MS, PhD"), ("Also offered", "Diplomas, certificates, open courses"), ("Financial support", "Financial Support Scheme")],
 secs=[]),
1505: dict(intro="STMU admits students through entrance tests, interviews and merit, depending on the programme, and reserves seats for some regions.",
 boxes=[("Medical (MBBS/BDS)", "STMU Entrance Test"), ("Pharm.D", "NTS-based selection"), ("Some programmes", "Multiple Mini Interviews (MMI)"), ("Processing fee", "Rs. 5,000 for specific departments")],
 secs=[("Seat categories", ["Local", "Balochistan region (reserved)", "Gilgit-Baltistan (reserved)", "Foreign / Overseas", "Special Foreign"]), ("Levels", ["Bachelor's", "Master's, MPhil and PhD", "Certificate and diploma programmes", "Associate programmes"])]),
1323: dict(intro="PAF-IAST offers bachelor's and master's programmes, and encourages female students to apply across all programmes.",
 boxes=[("Levels", "Bachelor's and Master's"), ("Scholarships", "Need-based, merit and external"), ("Female applicants", "Highly encouraged to apply")],
 secs=[]),
1324: dict(intro="The University of Haripur offers PhD, MS/MPhil, MSc (Hons), BS, lateral-entry (5th semester BS) and diploma programmes.",
 boxes=[("Entry test", "Required for MS/MPhil, MSc (Hons) and PhD"), ("Levels", "Diploma, BS, MSc (Hons), MS/MPhil, PhD"), ("Lateral entry", "5th semester BS")],
 secs=[]),
}

def tail(v):
    boxes = "".join('<div class="adm-k"><b>%s</b><span>%s</span></div>' % (html.escape(a, quote=False), html.escape(b, quote=False)) for a, b in v["boxes"])
    out = '<div class="adm-grid">%s</div>' % boxes
    for h, xs in v["secs"]:
        out += "<h3>%s</h3>%s" % (html.escape(h, quote=False), li(xs))
    out += '<p class="warn">Dates, fees and criteria change every session. Always confirm them on the official admissions page before applying.</p>'
    return out

def q(x):
    return x.replace("\\", "\\\\").replace("'", "''")

sql = []
for k, v in D.items():
    full = "<p>%s</p>%s" % (html.escape(v["intro"], quote=False), tail(v))
    sql.append("UPDATE data_education_listings SET tab_value_1='%s' WHERE listing_id=%d AND (tab_value_1 IS NULL OR tab_value_1='');" % (q(full), k))
    sql.append("UPDATE data_education_listings SET tab_value_1=CONCAT('<p>', tab_value_1, '</p>', '%s') WHERE listing_id=%d AND tab_value_1 NOT LIKE '%%adm-grid%%';" % (q(tail(v)), k))
open("admissions_final2.sql", "w", encoding="utf-8").write("\n".join(sql) + "\n")
print(len(D), "universities")
