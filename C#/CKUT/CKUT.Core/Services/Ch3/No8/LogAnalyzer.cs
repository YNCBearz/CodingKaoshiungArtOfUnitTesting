using System;

namespace CKUT.Core.Services.Ch3.No8
{
    public class LogAnalyzer
    {
        protected virtual IFileExtensionManager GetManager()
        {
            return new FileExtensionManager();
        }

        public bool IsValidFileName(string fileName)
        {
            try
            {
                return GetManager().IsValid(fileName);
            }
            catch (Exception e)
            {
                return false;
            }
        }
    }
}
