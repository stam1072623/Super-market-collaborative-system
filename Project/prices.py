import json
from datetime import datetime, timedelta
import random

# Sample products data
products = [
    {
        "product_id": "107",
        "product_name": "La Vache Qui Rit Τυρί Cheddar Φέτες 200γρ",
        "category_id": "ee0022e7b1b34eb2b834ea334cda52e7",
        "subcategory_id": "4c73d0eccd1e4dde8bb882e436a64ebb"
    },
    {
        "product_id": "109",
        "product_name": "Μίνι Babybel Διχτάκι 6τεμ 120γρ",
        "category_id": "ee0022e7b1b34eb2b834ea334cda52e7",
        "subcategory_id": "4c73d0eccd1e4dde8bb882e436a64ebb"
    },
    {
        "product_id": "132",
        "product_name": "Φάγε Τυρί Τριμμένο Gouda 200γρ",
        "category_id": "ee0022e7b1b34eb2b834ea334cda52e7",
        "subcategory_id": "4c73d0eccd1e4dde8bb882e436a64ebb"
    },
    {
        "product_id": "170",
        "product_name": "Φάγε Μιγμ Tριμ 4 Τυρ 200γρ",
        "category_id": "ee0022e7b1b34eb2b834ea334cda52e7",
        "subcategory_id": "4c73d0eccd1e4dde8bb882e436a64ebb"
    },
    {
        "product_id": "172",
        "product_name": "Φάγε Τυρί Flair Cottage 225γρ",
        "category_id": "ee0022e7b1b34eb2b834ea334cda52e7",
        "subcategory_id": "4c73d0eccd1e4dde8bb882e436a64ebb"
    },
    {
        "product_id": "364",
        "product_name": "Εδέμ Φασόλια Κόκκινα Σε Νερό 240γρ.",
        "category_id": "ee0022e7b1b34eb2b834ea334cda52e7",
        "subcategory_id": "50e8a35122854b2b9cf0e97356072f94"
    },
    {
        "product_id": "724",
        "product_name": "3 Άλφα Φασόλια Χονδρά Εισαγωγής 500γρ",
        "category_id": "ee0022e7b1b34eb2b834ea334cda52e7",
        "subcategory_id": "50e8a35122854b2b9cf0e97356072f94"
    },
    {
        "product_id": "749",
        "product_name": "3 Άλφα Ρεβύθια Χονδρά Εισαγωγής 500γρ",
        "category_id": "ee0022e7b1b34eb2b834ea334cda52e7",
        "subcategory_id": "50e8a35122854b2b9cf0e97356072f94"
    },
    {
        "product_id": "754",
        "product_name": "Agrino Φασόλια Γίγαντες Ελέφαντες Καστοριάς Π.Γ.Ε. 500γρ",
        "category_id": "ee0022e7b1b34eb2b834ea334cda52e7",
        "subcategory_id": "50e8a35122854b2b9cf0e97356072f94"
    },
    {
        "product_id": "769",
        "product_name": "3 Άλφα Φασόλια Γίγαντες Εισαγωγής 500γρ",
        "category_id": "ee0022e7b1b34eb2b834ea334cda52e7",
        "subcategory_id": "50e8a35122854b2b9cf0e97356072f94"
    },
    {
        "product_id": "1029",
        "product_name": "Fix Hellas Μπύρα 6X330ml",
        "category_id": "a8ac6be68b53443bbd93b229e2f9cd34",
        "subcategory_id": "329bdd842f9f41688a0aa017b74ffde4"
    },
    {
        "product_id": "1033",
        "product_name": "Heineken Μπύρα 6X330ml",
        "category_id": "a8ac6be68b53443bbd93b229e2f9cd34",
        "subcategory_id": "329bdd842f9f41688a0aa017b74ffde4"
    },
    {
        "product_id": "1037",
        "product_name": "Stella Artois Μπύρα 6x330ml",
        "category_id": "a8ac6be68b53443bbd93b229e2f9cd34",
        "subcategory_id": "329bdd842f9f41688a0aa017b74ffde4"
    },
    {
        "product_id": "1086",
        "product_name": "Mythos Μπύρα 330ml",
        "category_id": "a8ac6be68b53443bbd93b229e2f9cd34",
        "subcategory_id": "329bdd842f9f41688a0aa017b74ffde4"
    },
    {
        "product_id": "1139",
        "product_name": "Amstel Μπύρα 330ml",
        "category_id": "a8ac6be68b53443bbd93b229e2f9cd34",
        "subcategory_id": "329bdd842f9f41688a0aa017b74ffde4"
    },
    {
        "product_id": "1273",
        "product_name": "Λουξ Πορτοκαλάδα Μπλε 330ml",
        "category_id": "a8ac6be68b53443bbd93b229e2f9cd34",
        "subcategory_id": "3010aca5cbdc401e8dfe1d39320a8d1a"
    },
    {
        "product_id": "1288",
        "product_name": "Coca Cola Zero 1λιτ",
        "category_id": "a8ac6be68b53443bbd93b229e2f9cd34",
        "subcategory_id": "3010aca5cbdc401e8dfe1d39320a8d1a"
    },
    {
        "product_id": "1289",
        "product_name": "Coca Cola 330ml",
        "category_id": "a8ac6be68b53443bbd93b229e2f9cd34",
        "subcategory_id": "3010aca5cbdc401e8dfe1d39320a8d1a"
    },
    {
        "product_id": "1172",
        "product_name": "Red Bull Ενεργειακό Ποτό 250ml",
        "category_id": "a8ac6be68b53443bbd93b229e2f9cd34",
        "subcategory_id": "3010aca5cbdc401e8dfe1d39320a8d1a"
    },
    {
        "product_id": "442",
        "product_name": "Monster Energy Drink 500ml",
        "category_id": "a8ac6be68b53443bbd93b229e2f9cd34",
        "subcategory_id": "3010aca5cbdc401e8dfe1d39320a8d1a"
    },
    {
        "product_id": "756",
        "product_name": "Nestle Φαρίν Λακτέ 350γρ",
        "category_id": "8016e637b54241f8ad242ed1699bf2da",
        "subcategory_id": "7e86994327f64e3ca967c09b5803966a"
    },
    {
        "product_id": "417",
        "product_name": "Nutricia Biskotti Ζωάκια 180γρ",
        "category_id": "8016e637b54241f8ad242ed1699bf2da",
        "subcategory_id": "7e86994327f64e3ca967c09b5803966a"
    },
    {
        "product_id": "386",
        "product_name": "Γιώτης Ανθός Ορύζης 150γρ",
        "category_id": "8016e637b54241f8ad242ed1699bf2da",
        "subcategory_id": "7e86994327f64e3ca967c09b5803966a"
    },
    {
        "product_id": "329",
        "product_name": "Γιώτης Κρέμα Παιδικη Φαρίν Λακτέ Μπισκότο 300γρ",
        "category_id": "8016e637b54241f8ad242ed1699bf2da",
        "subcategory_id": "7e86994327f64e3ca967c09b5803966a"
    },
    {
        "product_id": "301",
        "product_name": "Γιώτης Μπισκοτόκρεμα 300γρ",
        "category_id": "8016e637b54241f8ad242ed1699bf2da",
        "subcategory_id": "7e86994327f64e3ca967c09b5803966a"
    },
    {
        "product_id": "349",
        "product_name": "Pampers Πάνες Μωρού Premium Pants Nο 5 12-17κιλ 34τεμ",
        "category_id": "8016e637b54241f8ad242ed1699bf2da",
        "subcategory_id": "e0efaa1776714351a4c17a3a9d412602"
    },
    {
        "product_id": "376",
        "product_name": "Pampers Πάνες Premium Care Nο 3 5-9 κιλ 60τεμ",
        "category_id": "8016e637b54241f8ad242ed1699bf2da",
        "subcategory_id": "e0efaa1776714351a4c17a3a9d412602"
    },
    {
        "product_id": "377",
        "product_name": "Pampers Πάνες Premium Care Nο 4 8-14 κιλ 52τεμ",
        "category_id": "8016e637b54241f8ad242ed1699bf2da",
        "subcategory_id": "e0efaa1776714351a4c17a3a9d412602"
    },
    {
        "product_id": "388",
        "product_name": "Babylino Πάνες Μωρού Sensitive Nο7 17+ κιλ 14τεμ",
        "category_id": "8016e637b54241f8ad242ed1699bf2da",
        "subcategory_id": "e0efaa1776714351a4c17a3a9d412602"
    },
    {
        "product_id": "465",
        "product_name": "Pampers Πάνες Μωρού 31τεμ",
        "category_id": "8016e637b54241f8ad242ed1699bf2da",
        "subcategory_id": "e0efaa1776714351a4c17a3a9d412602"
    },
    {
        "product_id": "472",
        "product_name": "Softex Χαρτί Υγείας Super Giga 2 Φύλλα 12τεμ",
        "category_id": "d41744460283406a86f8e4bd5010a66d",
        "subcategory_id": "034941f08ca34f7baaf5932427d7e635"
    },
    {
        "product_id": "490",
        "product_name": "Zewa Deluxe Χαρτί Υγείας 3 Φύλλα 8τεμ",
        "category_id": "d41744460283406a86f8e4bd5010a66d",
        "subcategory_id": "034941f08ca34f7baaf5932427d7e635"
    },
    {
        "product_id": "571",
        "product_name": "Zewa Χαρτι Κουζίνας Wisch And Weg Economy 3τεμ",
        "category_id": "d41744460283406a86f8e4bd5010a66d",
        "subcategory_id": "034941f08ca34f7baaf5932427d7e635"
    },
    {
        "product_id": "682",
        "product_name": "Kleenex Χαρτί Υγείας 2 Φύλλα 12τεμ",
        "category_id": "d41744460283406a86f8e4bd5010a66d",
        "subcategory_id": "034941f08ca34f7baaf5932427d7e635"
    },
    {
        "product_id": "765",
        "product_name": "Zewa Χαρτί Υγείας Deluxe Χαμομήλι 3 Φύλλα 8τεμ 768γρ",
        "category_id": "d41744460283406a86f8e4bd5010a66d",
        "subcategory_id": "034941f08ca34f7baaf5932427d7e635"
    },
    {
        "product_id": "797",
        "product_name": "Skip Υγρό Regular 30πλ",
        "category_id": "d41744460283406a86f8e4bd5010a66d",
        "subcategory_id": "e60aca31a37a40db8a83ccf93bd116b1"
    },
    {
        "product_id": "860",
        "product_name": "Fairy Original All in One Καψ Πλυντ Πιάτ Λεμόνι 22τεμ",
        "category_id": "d41744460283406a86f8e4bd5010a66d",
        "subcategory_id": "e60aca31a37a40db8a83ccf93bd116b1"
    },
    {
        "product_id": "862",
        "product_name": "Persil Black Υγρό Απορ Πλυντ Ρούχ 12Μεζ 750ml",
        "category_id": "d41744460283406a86f8e4bd5010a66d",
        "subcategory_id": "e60aca31a37a40db8a83ccf93bd116b1"
    },
    {
        "product_id": "865",
        "product_name": "Omo Υγρό Απορ Τροπ Λουλ 30πλ 1,95l",
        "category_id": "d41744460283406a86f8e4bd5010a66d",
        "subcategory_id": "e60aca31a37a40db8a83ccf93bd116b1"
    },
    {
        "product_id": "867",
        "product_name": "Dixan Σκόνη Πλυντ 42πλ 2,31γρ",
        "category_id": "d41744460283406a86f8e4bd5010a66d",
        "subcategory_id": "e60aca31a37a40db8a83ccf93bd116b1"
    },
    {
        "product_id": "1026",
        "product_name": "Friskies Adult Ξηρά Γατ/Φή Κουν/Κοτ/Λαχ 400γρ",
        "category_id": "662418cbd02e435280148dbb8892782a",
        "subcategory_id": "926262c303fe402a8542a5d5cf3ac7eb"
    },
    {
        "product_id": "1080",
        "product_name": "Friskies Άμμος Υγιεινής 5κιλ",
        "category_id": "662418cbd02e435280148dbb8892782a",
        "subcategory_id": "926262c303fe402a8542a5d5cf3ac7eb"
    },
    {
        "product_id": "1179",
        "product_name": "Friskies Adult Ξηρά Γατ/Φή Βοδ/Συκ/Κοτ 400γρ",
        "category_id": "662418cbd02e435280148dbb8892782a",
        "subcategory_id": "926262c303fe402a8542a5d5cf3ac7eb"
    },
    {
        "product_id": "1182",
        "product_name": "Purina Gold Gourmet Γατ/Φή Βοδ/Κοτ 85γρ",
        "category_id": "662418cbd02e435280148dbb8892782a",
        "subcategory_id": "926262c303fe402a8542a5d5cf3ac7eb"
    },
    {
        "product_id": "1191",
        "product_name": "Whiskas Γατ/Φή Κοτόπουλο 400γρ",
        "category_id": "662418cbd02e435280148dbb8892782a",
        "subcategory_id": "926262c303fe402a8542a5d5cf3ac7eb"
    },
    {
        "product_id": "1323",
        "product_name": "Cesar Clasicos Σκυλ/Φή Μοσχ 150γρ",
        "category_id": "662418cbd02e435280148dbb8892782a",
        "subcategory_id": "0c6e42d52765495dbbd06c189a4fc80f"
    },
    {
        "product_id": "1181",
        "product_name": "Pedigree Σκυλ/Φή Πατέ Κοτοπ/Μοσχ 300γρ",
        "category_id": "662418cbd02e435280148dbb8892782a",
        "subcategory_id": "0c6e42d52765495dbbd06c189a4fc80f"
    },
    {
        "product_id": "1180",
        "product_name": "Pedigree Υγ Σκυλ/Φή 3 Ποικ Πουλερικών 400γρ",
        "category_id": "662418cbd02e435280148dbb8892782a",
        "subcategory_id": "0c6e42d52765495dbbd06c189a4fc80f"
    },
    {
        "product_id": "1181",
        "product_name": "Pedigree Σκυλ/Φή Πατέ Κοτοπ/Μοσχ 300γρ",
        "category_id": "662418cbd02e435280148dbb8892782a",
        "subcategory_id": "0c6e42d52765495dbbd06c189a4fc80f"
    },
    {
        "product_id": "1173",
        "product_name": "Friskies Σκυλ/Φή Ξηρ Κοτ/Λαχ 1,5κιλ",
        "category_id": "662418cbd02e435280148dbb8892782a",
        "subcategory_id": "0c6e42d52765495dbbd06c189a4fc80f"
    }
]

# Date range from "2023-7-9" to "2023-11-9"
start_date = datetime(2023, 9, 7)
end_date = datetime(2023, 9, 11)
date_range = [start_date + timedelta(days=i) for i in range((end_date - start_date).days + 1)]

# Generate JSON data with prices
result = []

for product in products:
    product_data = {"product_id": product["product_id"], "product_name": product["product_name"],
                    "category_id": product["category_id"]}
    product_prices = []

    for date in date_range:
        # Generate random price with small differences
        price = round(random.uniform(1.0, 3.0), 2)  # Adjust the range as needed
        product_prices.append({"date": date.strftime("%Y-%m-%d"), "price": price})

    product_data["prices"] = product_prices
    result.append(product_data)

# Convert the result to JSON format
json_data = json.dumps(result, indent=4, ensure_ascii=False)

# Print or return the JSON data
print(json_data)
