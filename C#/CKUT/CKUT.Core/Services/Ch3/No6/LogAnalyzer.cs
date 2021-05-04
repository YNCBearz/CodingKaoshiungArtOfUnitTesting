using System;

namespace CKUT.Core.Services.Ch3.No6
{
    public class LogAnalyzer
    {
        private IFileExtensionManager _fileExtensionManager;

        public LogAnalyzer()
        {
            _fileExtensionManager = new FileExtensionManager();
        }

        public IFileExtensionManager FileExtensionManager // 允許透過屬性來設定相依物件
        {
            get { return _fileExtensionManager; }
            set { _fileExtensionManager = value; }
        }

        public bool IsValidFileName(string fileName)
        {
            try
            {
                return _fileExtensionManager.IsValid(fileName);
            }
            catch (Exception e)
            {
                return false;
            }
        }
    }
}
