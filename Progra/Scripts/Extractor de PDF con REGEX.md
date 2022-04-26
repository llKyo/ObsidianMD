#python #regex #pdf #pandas #excel

----
# Extractor de PDF con REGEX
```python
from tika import parser
import re
import pandas as pd

# Extracción del PDF
raw = parser.from_file('Aiuda.pdf')
pdf_string = raw['content']

# Búsqueda de los totales
totales = re.findall('Total: (.*) PAC', pdf_string)

# Construcción del Excel
totales_DF = pd.DataFrame(totales)
total_excel = pd.ExcelWriter('totales.xlsx')
totales_DF.to_excel(total_excel)
total_excel.save()

# Fin :)
print('Listo :D.')
```