import html

D = {
6: dict(n="NCBA&E", intro="NCBA&E admits students to undergraduate, master's and doctoral programmes, including associate degree (ADP) options. Its admissions page lists programmes such as BS (Hons) Information Systems and Technology Management, MS/MPhil Artificial Intelligence, MS/MPhil Computer Science, MPhil Mass Communication, MPhil Clinical Psychology, MPhil Business Administration and PhD Business Administration.",
 boxes=[("Levels", "ADP, Undergraduate, Master's, Doctorate"), ("Scholarships", "Merit-based, on marks in last certificate"), ("Scholarship rule", "One (the highest) scholarship at a time")],
 secs=[("Programmes named on the admissions page", ["BS (Hons) Information Systems and Technology Management", "MS/MPhil Artificial Intelligence", "MS/MPhil Computer Science", "MPhil Mass Communication", "MPhil Clinical Psychology", "MPhil Business Administration", "MPhil English Linguistics", "MPhil English Literature", "MPhil Environmental Science", "PhD Business Administration"])]),
9: dict(n="Forman Christian College (FCCU)", intro="FCCU admits students on merit and offers Bachelor's and Master's programmes. Its admissions FAQs state that the entry test is mandatory for all applicants.",
 boxes=[("Entry test", "Mandatory for all applicants"), ("Scholarships", "Merit-based, on T-score"), ("Supplementary in Intermediate", "Not eligible; all subjects must be passed")],
 secs=[("Merit scholarships (as stated by FCCU)", ["25% tuition fee scholarship for a T-score of 69", "50% tuition fee scholarship for a T-score of 70 and above", "Rector's (100%) and Vice Rector's (75%) scholarships also open to T-score 70 and above"]), ("Good to know", ["An ADP degree can be converted to a 4-year degree on a merit-based decision by the Academic Services Office", "Applicants offered BST did not meet merit for the programmes they applied to"])]),
15: dict(n="Institute of Management Sciences (Pak-AIMS)", intro="The Institute offers admission on the basis of the applicant's previous academic record, the aptitude test score and a personal interview. The aptitude test is based on the GMAT pattern.",
 boxes=[("Selection", "Academic record + aptitude test + interview"), ("Test pattern", "Based on GMAT"), ("Form", "Photograph on admit card; submit before deadline")],
 secs=[("Aptitude test", ["English usage: fill in the blanks, error identification and similar questions", "Standard GMAT preparation guides are useful for preparation"])]),
22: dict(n="International Islamic University Islamabad (IIUI)", intro="IIUI's admission portal asks applicants to read the eligibility criteria carefully and apply only if they qualify. Applicants pay a single non-refundable admission processing fee, after which they may apply to more than one programme.",
 boxes=[("Processing fee (local)", "Rs. 2,000, non-refundable"), ("Processing fee (international)", "USD 50 or equivalent"), ("Refugees in Pakistan", "Apply as local candidates; entry test or interview required")],
 secs=[("Documents", ["All certificates and degrees: 10th grade, 12th grade, Bachelor and Master, as applicable", "Admission processing fee challan"]), ("Good to know", ["University fee is refunded only as per HEC policy", "Tuition fee refund follows a set schedule, including weekends"])]),
24: dict(n="NUML", intro="NUML runs regular admissions for undergraduate, MS, MPhil and PhD programmes and functional courses. Applicants apply online, and the university also accepts qualifying HEC HAT results.",
 boxes=[("Levels", "Undergraduate, MS, MPhil, PhD, functional courses"), ("Processing fee", "Rs. 2,500, non-refundable"), ("Accepted test results", "HEC HAT General (MS/MPhil) and HAT Subject (PhD)")],
 secs=[("Good to know", ["BS/BBA (Hons) applicants must provide an IBCC-verified QR document at the interview", "Applicants with foreign, O or A level qualifications need an IBCC equivalence certificate", "The complete fee structure is published on the NUML website"])]),
30: dict(n="LUMS", intro="LUMS's admissions site lists master's and doctoral programmes across engineering, management, humanities and social sciences. The university describes a 100-acre campus and stresses diversity of people and ideas.",
 boxes=[("Campus", "100 acres"), ("Financial aid", "Dedicated financial-aid page")],
 secs=[("Graduate programmes named on the admissions page", ["MS Artificial Intelligence", "MS Electrical Engineering", "MS Digital and Embedded Systems", "MS Power Engineering and Smart Grids", "MS Healthcare Management and Innovation", "MS Supply Chain and Retail Management", "MS Technology Management and Entrepreneurship", "MPhil Comparative Humanities", "MPhil Society, Culture and Politics", "MPhil Education Leadership and Management", "PhD Chemical and Environmental Engineering", "PhD Electrical Engineering"])]),
31: dict(n="Minhaj University Lahore", intro="Minhaj University Lahore lists programme-wise eligibility on its admissions page. Undergraduate programmes generally ask for Intermediate (12 years of education) or equivalent with a minimum percentage, plus an interview.",
 boxes=[("Typical requirement", "Intermediate (12 years) or equivalent"), ("Minimum marks", "45% for most programmes; 50-60% for some"), ("Selection", "Interview; LAT for LLB")],
 secs=[("Eligible qualifications", ["FSc, FA, ICS, ICom, A-Levels or DAE (varies by programme)", "LLB (4 years): Intermediate with minimum 45% and an interview; LAT with 50% marks", "BS Financial Technology: FSc (Pre-Medical) with at least 45%"]), ("Good to know", ["Financial aid and scholarships are available"])]),
36: dict(n="University of Agriculture Faisalabad (UAF)", intro="UAF admits undergraduate applicants through entry tests, and posts merit lists and fee vouchers on its admissions page. Its listings include diploma programmes in agriculture and B.Ed programmes.",
 boxes=[("Selection", "Entry test and merit"), ("Also offered", "Diplomas in agriculture; B.Ed")],
 secs=[("Programmes named on the admissions page", ["Three-year Diploma in Modern Agriculture Technology (MAT)", "Three-year Diploma in Agricultural Sciences (DAS)", "B.Ed evening and weekend programmes"]), ("Good to know", ["Separate interview and test schedules exist for co-curricular activities and Hafiz-e-Quran applicants"])]),
37: dict(n="PMAS Arid Agriculture University Rawalpindi", intro="Admission at UAAR is by university entrance test. The admissions page separates open merit, special quotas and the evening programme, and both male and female candidates may apply.",
 boxes=[("Selection", "University entrance test"), ("Morning programme seats", "All-Punjab and ICT basis"), ("Evening programme seats", "All-Pakistan basis")],
 secs=[("Good to know", ["Open merit seats are on an all-Punjab basis", "For some postgraduate programmes, applicants must pass the university GRE-type subject test with 70% marks", "Applications for special quotas must attach the required certificates"])]),
49: dict(n="Greenwich University Karachi", intro="Greenwich University Karachi is HEC recognised and offers four-year BS and BBA degrees across twelve schools, plus the Bachelor of Education, and postgraduate programmes. Merit, need-based and sports scholarships are available, and applications are reviewed on a rolling basis.",
 boxes=[("Entry level (undergraduate)", "After Matric / O-Levels, or Intermediate / A-Level or equivalent"), ("Postgraduate", "16 years of education for MBA / MS / MPhil"), ("Scholarships", "Merit, need-based and sports")],
 secs=[("Partner pathways", ["Pearson BTEC Higher Nationals programmes", "UWE Bristol programmes"])]),
56: dict(n="Iqra University", intro="Iqra University's admission hub lists requirements by level: associate degrees, two-year and four-year bachelor's programmes, master's, MPhil and PhD. PhD applicants need an MS/MPhil in the relevant field, or an MBA with the required credit hours.",
 boxes=[("Levels", "Associate, Bachelor's, Master's, MPhil, PhD"), ("PhD entry test", "NTS GAT (Subject) 60% or GRE Subject 60 percentile"), ("Student exchange", "Exchange programme policy available")],
 secs=[("Programmes named on the admission hub", ["Four-year: BBA (Hons), BS Accounting and Finance, BS Finance and Technology, BS Aviation", "Four-year BS: Computer Science, Software Engineering, Artificial Intelligence, Telecommunication", "Master's: MBA, MS Digital Marketing, MS Finance and Technology, MS Project Management", "Associate degrees: Accounting, Business Analytics, Finance, Digital Marketing", "MPhil and PhD in Business Administration"])]),
61: dict(n="MUET Jamshoro", intro="MUET offers undergraduate and postgraduate programmes across four faculties, with 24+ undergraduate disciplines (BE, BS, BBA, B.Arch and BE Technology), plus master's and PhD programmes, short courses and CPD programmes.",
 boxes=[("Undergraduate", "24+ disciplines"), ("Financial aid", "40%+ of students receive aid"), ("Scholarships", "Merit-based"), ("Pre-admission test", "Held before admission")],
 secs=[("Good to know", ["Postgraduate research focuses on areas such as water management and sustainable energy", "Collaborative programmes with international universities and organisations", "Short courses, CPD programmes and workshops are also offered"])]),
65: dict(n="QUEST Nawabshah", intro="QUEST's admission rules for bachelor programmes set minimum HSC-II marks by programme type, and merit is calculated from Matric, HSC-I and the entry test.",
 boxes=[("Engineering (BE)", "Minimum 60% in HSC-II"), ("Science and Technology (BS)", "Minimum 50% in HSC-II"), ("Merit formula", "Matric 10% + HSC-I 20% + Test 70%")],
 secs=[("Eligibility notes", ["Pre-Engineering: eligible for Engineering and Science programmes", "Pre-Medical: eligible for IT, AI, Chemistry and English programmes, with a Mathematics course", "Grace marks are not counted", "Fake documents lead to cancellation of admission and legal action"]), ("Documents", ["Attested SSC/HSC marksheets", "Domicile and PRC", "Other certificates"])]),
68: dict(n="Sindh Agriculture University Tandojam", intro="SAU's admissions page covers undergraduate, postgraduate, diploma and certificate programmes. Undergraduate applicants register online through the admission portal and sit a pre-admission entry test.",
 boxes=[("Levels", "Undergraduate, Postgraduate, Diploma, Certificate"), ("Application", "Online registration"), ("Selection", "Pre-admission entry test and interviews")],
 secs=[("Good to know", ["Applicants pay the registration/admission processing fee by mobile banking or online challan", "Applicants select one centre for the entry test", "Provisional merit lists, seat breakup, fee breakup and the admission policy are published for undergraduate admissions"])]),
69: dict(n="SSUET Karachi", intro="SSUET admits undergraduate students through an entry test taken on campus. Programmes are on-campus, and distance learning degrees are not available.",
 boxes=[("Selection", "Entry test at SSUET"), ("Mode of study", "On-campus only"), ("UG test fee", "Rs. 3,900"), ("AIT graduates", "Rs. 1,000")],
 secs=[("Good to know", ["Separate fee structures exist for Engineering and Non-Engineering programmes", "Applications are made through admissions.ssuet.edu.pk"])]),
75: dict(n="BUITEMS Quetta", intro="BUITEMS asks applicants to fill in the admission form online and submit a hard copy with documents. Eligible candidates take the NTS admission test, and NTS/HAT results are also accepted. Merit is calculated from Matric, Intermediate and the admission test.",
 boxes=[("Selection", "Merit: Matric + Intermediate + test"), ("Test", "NTS admission test; NTS/HAT results accepted"), ("Form", "Online, plus hard copy")],
 secs=[("Documents required", ["Attested Secondary School Certificate", "Attested Higher Secondary School Certificate", "Attested CNIC or B-form of the applicant", "Attested local/domicile", "Attested CNIC of father or guardian", "Attested character certificate from the last institute", "Bank draft, pay order or receipt for the admission processing fee"])]),
83: dict(n="IMSciences Peshawar", intro="IMSciences publishes separate advertisements for undergraduate and graduate admissions, accepts online applications and offers entrance-test model papers and a mock test for applicants.",
 boxes=[("Levels", "Undergraduate, Graduate, PhD"), ("Test prep", "Model papers and mock test"), ("PhD support", "Fellowships and fee reimbursement policy")],
 secs=[("Good to know", ["Fee structures are published for all programmes, including BS Hospitality and Tourism (4-year)"])]),
1351: dict(n="Shaikh Ayaz University", intro="The Shaikh Ayaz University offers four-year bachelor's programmes across three faculties, and its admissions process runs from documents and fee to entry test and merit list.",
 boxes=[("Programme length", "4-year bachelor's"), ("Selection", "University entry test and merit list")],
 secs=[("Admission steps on the official page", ["Submit the required documents", "Deposit the admission form fee", "Appear for the university entry test", "Check the published merit list", "Pay the semester fee within the deadline", "Attend orientation"])]),
1514: dict(n="University of Makran", intro="University of Makran, Panjgur invites applications for undergraduate programmes. Applicants fill in the form online and submit a hard copy with documents, sit the university's admission test, and are selected on merit from Matric, Intermediate and the test.",
 boxes=[("Selection", "Merit: Matric + Intermediate + test"), ("Test", "Conducted by the University of Makran"), ("Form", "Online, plus hard copy")],
 secs=[("Good to know", ["Applicants can choose priority programmes (up to three)"])]),
1542: dict(n="Habib University", intro="Habib University asks applicants to meet the grade and subject requirements on its Admissions Criteria page, register online, complete the e-application, pay the application fee and take the Habib University Entrance Test.",
 boxes=[("Entrance test", "Habib University Entrance Test"), ("Application", "Online e-application"), ("Boards accepted", "National and international examination boards, including IB Diploma")],
 secs=[("Steps on the official page", ["Register online and pick a programme", "Complete the e-application", "Pay the application fee online or send the receipt", "Take the Habib University Entrance Test"]), ("Good to know", ["Fee structure and scholarships are on the Tuition and Financial Aid pages", "Separate pages exist for transfer and international students"])]),
1507: dict(n="PIDE", intro="PIDE's admissions page lists programme eligibility, merit and need-based scholarships, a work-study programme and international exchange programmes.",
 boxes=[("Work-study", "PKR 80,000 per month"), ("Scholarships", "Merit and need-based"), ("Exchange", "International exchange programmes")],
 secs=[("Programmes named on the page", ["PhD Public Policy and Governance", "MPhil Public Policy and Governance", "MPhil Development Studies", "MPhil Economics and Finance"]), ("Good to know", ["PhD applicants need letters of recommendation and a research proposal following PIDE's guidelines"])]),
1334: dict(n="Mirpur University of Science and Technology", intro="MUST admits students to undergraduate and postgraduate programmes. Undergraduate seats are offered under a subsidised category (normal fee structure, merit-based) and an open merit category (self-financing).",
 boxes=[("Subsidised", "Normal fee structure, merit-based"), ("Open merit", "Self-financing")],
 secs=[("Levels", ["Undergraduate programmes", "MS, MSc and MPhil programmes", "PhD programmes"])]),
1319: dict(n="Karakoram International University", intro="KIU accepts BS admission forms online only. The application process fee is Rs. 1,500 and can be paid at any HBL branch after the form is submitted. The university stresses merit-based, transparent admissions.",
 boxes=[("Application", "Online only"), ("Process fee", "Rs. 1,500 at any HBL branch"), ("Also open", "B.Ed and After-ADE programmes")],
 secs=[("Good to know", ["Programmes are designed for regional needs such as tourism, mining, education and animal sciences"])]),
}

def li(xs):
    return "<ul>" + "".join("<li>%s</li>" % html.escape(x, quote=False) for x in xs) + "</ul>"

def build(v):
    boxes = "".join('<div class="adm-k"><b>%s</b><span>%s</span></div>' % (html.escape(a, quote=False), html.escape(b, quote=False)) for a, b in v["boxes"])
    out = "<p>%s</p><div class=\"adm-grid\">%s</div>" % (html.escape(v["intro"], quote=False), boxes)
    for h, xs in v["secs"]:
        out += "<h3>%s</h3>%s" % (html.escape(h, quote=False), li(xs))
    out += '<p class="warn">Dates, fees and criteria change every session. Always confirm them on the official admissions page before applying.</p>'
    return out

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
    sql.append("UPDATE data_education_listings SET tab_value_1='%s' WHERE listing_id=%d AND (tab_value_1 IS NULL OR tab_value_1='');" % (q(build(v)), k))
    sql.append("UPDATE data_education_listings SET tab_value_1=CONCAT('<p>', tab_value_1, '</p>', '%s') WHERE listing_id=%d AND tab_value_1 NOT LIKE '%%adm-grid%%';" % (q(tail(v)), k))
open("admissions_final.sql", "w", encoding="utf-8").write("\n".join(sql) + "\n")
print(len(D), "universities")
