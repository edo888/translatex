# TranslateX

Unlimited automatic translation API for apps, websites, and services.

https://translatex.com

---

## 🔧 Features

- **Unlimited translations** without usage caps  
- Supports **35+ languages**, including English, Chinese (Simplified/Traditional), Spanish, French, Arabic, Russian, Japanese, and more
- Two neural models:
  - *Small*: quality score ~7.9/10
  - *Large*: quality score ~8.3/10 (vs. ~8.5/10 for human translation)  
- Multiple subscription tiers:
  - **Free**: Small model, CPU hosting, 50 API calls/min, unlimited translations (no commercial use / no privacy mode)  
  - **Startup** (~$19.99/mo): Large model, GPU hosting, 50 API calls/min, commercial use, privacy mode  
  - **Business** (~$29.99/mo): Large model, GPU hosting, 75 API calls/min, full features  
  - **Enterprise** (~$39.99/mo): Large model, GPU hosting, 100 API calls/min, full features

## 📊 Quality Evaluation

**Translation quality is measured using the [Alconost.MT Evaluation Tool](https://alconost.mt/evaluate).**

#### Scoring System  
(Credits: [https://alconost.mt/evaluate](https://alconost.mt/evaluate))

- **91-100 — Publish-Ready:**  
  Ready for use with minimal or no edits.
- **70-90  — Acceptable:**  
  Generally accurate and fluent; meaning is preserved. Requires human review and correction before use.
- **50-69  — Fair:**  
  Understandable but contains noticeable issues. Requires significant human review and correction. Use with caution.
- **1-49   — Unusable:**  
  Difficult to understand or use reliably. Re-generate or assign for full human translation.

---

### OpenAI GPT-4.1 Results

| File                       | Evaluation Link                                                                        | Score  |
|----------------------------|----------------------------------------------------------------------------------------|--------|
| tx_paid_en-es-1-30.csv     | [View](https://alconost.mt/evaluate/e9e5d1e9-a064-4dbc-9563-eab0a1ef18b2)             | 97/100 |
| tx_free_en-es-1-30.csv     | [View](https://alconost.mt/evaluate/2fb46b5f-3335-48a7-9ada-0209d73e1203)             | 92/100 |
| deepl_en-es-1-30.csv       | [View](https://alconost.mt/evaluate/2ca42db5-de17-4202-9f5e-1d0a775a2de9)             | 98/100 |
| gt_en-es-1-30.csv          | [View](https://alconost.mt/evaluate/0850ffb7-17c6-44e3-b48b-8f77e998b4dc)             | 97/100 |
| ref_en-es-1-27.csv         | [View](https://alconost.mt/evaluate/8131f46b-1bea-45f2-8ab0-593eff124f8f)             | 95/100 |

---

### Claude 4 Sonnet Results

| File                       | Evaluation Link                                                                        | Score  |
|----------------------------|----------------------------------------------------------------------------------------|--------|
| tx_paid_en-es-1-30.csv     | [View](https://alconost.mt/evaluate/c6c3da9e-62ba-4fc7-923e-e9d71119e620)             | 94/100 |
| tx_free_en-es-1-30.csv     | [View](https://alconost.mt/evaluate/695581a0-7511-4be8-bc21-93d2ba6e5dbd)             | 85/100 |
| deepl_en-es-1-30.csv       | [View](https://alconost.mt/evaluate/71570330-4bff-412d-9ad6-fd02ca3c3099)             | 94/100 |
| gt_en-es-1-30.csv          | [View](https://alconost.mt/evaluate/dc96d64a-f725-4931-916e-59641bd2c31e)             | 95/100 |
| ref_en-es-1-27.csv         | [View](https://alconost.mt/evaluate/32f28085-531d-4e74-a4e6-5d501d7afc62)             | 86/100 |

---
