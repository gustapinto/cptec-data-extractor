from json import loads

from src.utils.config import Config
from src.utils.exporters.exporter_interface import ExporterInterface

class JsonExporter(ExporterInterface):
    def export(self, kind):
        if (kind not in ('tempmax', 'tempmin')):
            return None

        json_path = f'{Config.storage_dataset_dir}/{kind}.json'

        with open(json_path) as json:
            return json.read()
